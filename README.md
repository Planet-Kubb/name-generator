# Planet Kubb Name Generator

The [Planet Kubb](http://planetkubb.com/) Name Generator is a fun web site that generates goofy names for Kubb teams.

## How to Use This

There isn't much to know. The PHP is all of about 5 lines. The webserver will default the user to /en for English and then the user can switch from there.

# Translations

It would be really great if the Kubb Team Name Generator generated team names for Kubb Teams all around the world!

# Name Generation

A localised version is made by just filling out the "adjs" and "kubbs" files in the directory for the a given language. See how the English list was created for a start.

## English

* adjs

  This file is the modifiers that go in front of the team name. It purposefully contains a number of blank lines to so that sometimes the teams don't have a name in front of them.

* kubbs

  The list of names to randomly pick from. This list was generated using the word list that Unix has in `/usr/share/dict/words`. This is the recipe:

  grep "cub" american-english-large| egrep -v ".*'s" | sed 's/cub/kubb/'
  
  grep "wood" american-english-large| egrep -v ".*'s" | sed 's/wood/kubb/'
  
  egrep "^[bdfghjklmnprstvwz]ub" american-english-large | sed 's/^\wub/kubb/' | sort | uniq | egrep -v ".*'s$"

 These sets were then sent through `sort` and `uniq`. The final touch was to replace "bbb" strings with "bb".

# Frameworks

Planet Kubb uses the [Twitter Bootstrap](http://twitter.github.com/bootstrap/) CSS/HTML syntax so feel free to add anything that leverages that. Additionally [jQuery](http://jquery.com/) is already in.

