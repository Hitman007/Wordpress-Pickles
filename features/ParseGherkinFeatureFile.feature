Feature: The plugin accepts .feature files and parses them into CPTs
  In order to input a Gherkin feature file into the system
  the Pickles plugin
  Should be able to accept a feature file and parse it into CPTs

Scenario: the user should input a feature file
  Given the user has an external feature file
  Given there should be a form to input feature files
  When the user inputs the .feature file into the form
  Then the Pickels plugin should parse the file
  And the Pickles plugin should store the file as CPTs

Scenario: the Pickels plugin should parse the file
  Given the user inputs the .feature file into the form
  When the Pickles plugin parses the file
  Then each Gherkin stakement is stored as a Wordpress Custom Post Type "pickle"
  And there is assorted meta data associated with the pickle
  
