# Agent guide: pk-name-generator

The Planet Kubb Name Generator: a small PHP page that makes goofy Kubb team names by putting a
random line of `adjs` in front of a random line of `kubbs`. `README.md` says how the English
lists were made. This file holds the rules and what is still open.

## Status (2026-11-21)

- Public repo `Planet-Kubb/pk-name-generator`, last changed in 2012. It joined the Throwing Wood
  workstream on 2026-11-21 and was renamed from `name-generator` the same day, with the `pk-`
  prefix of its sibling `pk-kubb-score`; the old URL redirects. Claude owns and maintains it, design included (Jamie,
  2026-11-21). Hosting, domain and the page's analytics stay Jamie's call; it is not known to be
  deployed anywhere today.
- Only English has word lists. de, es, fr, it, nl, no and pl are placeholders that ask for
  help.

## Rules for this repo

- Changes reach `master` through pull requests. The `validate` workflow runs
  `scripts/check.sh` (PHP lint, `<?php` open tags, every language's two word lists present as
  Unix text) and must pass before a merge. Run the script by hand before pushing; without a
  local `php` it skips only the lint.
- A language is a folder under `public_html/` with `index.php`, `adjs` and `kubbs`. Blank lines
  in `adjs` are deliberate: they give some names no adjective.
- The English `kubbs` list was made by swapping "cub", "wood" and "-ub" for "kubb" across a Unix
  word list, so it has crude entries. Do not reuse it elsewhere, Throwing Wood included, without
  curating it first.

## Open questions

- For Jamie: whether and where the page is hosted, and whether it keeps the Piwik tracker that
  `public_html/include/lib.php` loads from stats.thingelstad.com.
- For Claude: the page's 2012 pieces (Bootstrap 2, the Twitter widget, a "Fork me" ribbon that
  points at the old `thingles/Planet-Kubb-Name-Generator` repo, the reload-to-retry button),
  and whether to curate the English noun list.
