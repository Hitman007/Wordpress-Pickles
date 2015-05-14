# Wordpress Gherkin CPTs #
![pickle.png](https://bitbucket.org/repo/aAdo7g/images/2792568942-pickle.png)


This plugin assumes you are familiar with [Behavior Driven Development](http://en.wikipedia.org/wiki/Behavior-driven_development), the [Gherkin language](http://docs.behat.org/en/latest/guides/1.gherkin.html), and [Behat feature files](http://docs.behat.org/en/latest/guides/1.gherkin.html#features).
This plugin creates custom post types and custom taxonomies for the Gherkin language in Wordpress.
The plugin introduces the concept of a "pickle" which is a single Gherkin statement.
Pickles are stored as Wordpress CPTs: "Pickles".
Introduces Wordpress custom taxonomy for Gherkin pickles:
Each pickle is stored as a Wordpress CPT. 
Pickles can be FEATURES, SCENARIOS, TERMS, ACTORS, BACKGROUNDS, SCENARIO OUTLINES, or PICKLES. Pickles are sentences made up of terms, actors and a plain language phrase like "WHEN[term] JOHN[actor] goes to the store and buys milk[phrase]". 
Or pickles are combinations of terms, actors and a reference to a OOP method. The method can be a function, a file, a Behat method, a link, a Git, whatever!
You can use this plugin to build Wordpress Behat/BDD/Gherkin web applications.
## INSTALATION: ##
Create a directory in your /wp-content/plugins/ directory called "crg_gherkin"
Copy the files from this git to that directory.
In your Wordpress admin area, go to "Plugins", then look for "CRG Gherkin" and click "Activate".

## HOW TO USE: ##
The code is pretty well documented. You can use the CPTs just like regular Wordpress posts. In the future, this can be the basis of other applications.

## DEVELOPERS WANTED ##
Hey guys, I could use some help. If you're a Wordpress programmer or developer, contact me to conrtibute! customrayguns.com jim@customrayguns.com

![pickles_screen_shot.jpg](https://bitbucket.org/repo/aAdo7g/images/1209142840-pickles_screen_shot.jpg)
