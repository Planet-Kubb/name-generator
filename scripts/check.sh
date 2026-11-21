#!/bin/bash
# The repo's check, run by the validate workflow and runnable by hand:
#   scripts/check.sh
# Every page lints under PHP and opens PHP with <?php (short tags only run
# where short_open_tag is on), and every language folder has its two word
# lists as plain text with Unix line ends. Lints only when php is installed;
# CI always has it.
set -u
cd "$(dirname "$0")/.."
fail=0
bad() { echo "FAIL  $1"; fail=1; }

if command -v php >/dev/null 2>&1; then
  for f in public_html/*/index.php public_html/include/*.php; do
    php -l "$f" >/dev/null 2>&1 || bad "$f does not lint: php -l $f"
  done
else
  echo "skip  php -l (php is not installed here)"
fi

if grep -rnE '<\?($|[^p=x])' public_html --include='*.php'; then
  bad "short PHP open tags above: write <?php"
fi

for dir in public_html/*/; do
  dir="${dir%/}"
  [ -f "$dir/index.php" ] || continue
  [ "$dir" = public_html/include ] && continue
  for list in adjs kubbs; do
    f="$dir/$list"
    if [ ! -f "$f" ]; then bad "$f is missing"; continue; fi
    grep -q $'\r' "$f" && bad "$f has Windows line ends"
    [ -n "$(tail -c1 "$f")" ] && bad "$f does not end with a newline"
  done
done

[ $fail -eq 0 ] && echo "ok    all checks pass"
exit $fail
