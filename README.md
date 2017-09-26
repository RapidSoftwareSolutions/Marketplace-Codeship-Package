[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Codeship/functions?utm_source=RapidAPIGitHub_CodeshipFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Codeship Package
Codeship is a hosted Continuous Delivery platform. It helps to release software quickly, automatically and multiple times a day. It shortens the development cycles thus reducing the risk of bugs and increasing innovation. It helps software companies to develop a better product faster by taking care of the testing and release process. Managing your own continuous deployment system takes time, specialized knowledge, custom solutions and dedicated, on-premise infrastructure.
* Domain: [codeship.com](https://codeship.com/)
* Credentials: apiKey

## How to get credentials: 
1. Register on the [codeship.com](https://codeship.com/)
2. After registration, you will receive apiKey in [account setting](https:\/\/app.codeship.com\/user\/edit)
 
  ## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Codeship.getProjects
This wil return a list of all projects incl. the last 10 builds for each project.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.

## Codeship.getProject
This will return information about the specified project as well as the latest builds for that project.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API Key.
| projectId| Number     | Project id.
| branch   | String     | Project branch.

## Codeship.getBuild
This will return the details of the build specified by the buildUuid.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API Key.
| buildUuid| Number     | Unique build id.

## Codeship.restartBuild
This will make Codeship restart the build identified by the buildUuid. It will use the commit id from that particular build, so you will always get the same source as when the build was first triggered.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your API Key.
| buildUuid| Number     | Unique build id.

