# Agent guide: pk-name-generator

The Planet Kubb Name Generator: a small PHP page that makes goofy Kubb team names by putting a
random line of `adjs` in front of a random line of `kubbs`. `README.md` says how the English
lists were made. This file holds the rules and what is still open.

## Status: archived (2026-11-21)

- Public repo `Planet-Kubb/pk-name-generator`, last changed in 2012, archived on GitHub on
  2026-11-21 at Jamie's request: read only, kept for its history. It joined the Throwing Wood
  workstream and was renamed from `name-generator` the same day; the old URL redirects.
- Its idea lives on in the Kubb Engine's generated names (`core/namewords.lua`,
  `docs/NAMES.md` in `jthingelstad/kubb-engine`), which start from its adjectives and the
  best of its "-kubb" blends. Work on names belongs there, not here.
- The page is not hosted; name.planetkubb.com no longer resolves.

## If it is ever unarchived

- Changes reach `master` through pull requests, and the `validate` workflow
  (`scripts/check.sh`: PHP lint, `<?php` open tags, every language's two word lists present as
  Unix text) must pass before a merge.
- The English `kubbs` list was made by swapping "cub", "wood" and "-ub" for "kubb" across a
  Unix word list, so it has crude entries. Do not reuse it anywhere without curating it first.
