Feature: The plugin accepts .feature files and parses them into CPTs
  In order to input a Gherkin feature file into the system
  the Pickles plugin
  Should be able to accept a feature file and parse it into CPTs

Scenario: the user inputs a feature file
  Given the user has an external feature file
  Given there should be a form to input feature files
  When the user inputs the .feature file into the form
  Then the Pickels plugin should parse the file
  And the Pickles plugin should store the file as CPTs
