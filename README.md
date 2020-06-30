## cale-api

### Temporary research:

A very simple one-file PHP that will respond with datetime in any requested format and output. Super fast and based on request parameters:

q = query type - accepted values: day | date | time

timezone = your timezone (ex. Europe/Berlin)

responseType = json | text (plain-text is default)

f = PHP date format ex "Y-m-d" for date

Accepted methods: GET / POST

Example request:
[index.php?q=date&timezone=America/New+York&f=Y-m-d+H:i](http://fs.fasani.de/api/?q=date&timezone=America/New+York&f=Y-m-d+H:i) is a working example in my test server in AWS.
 


**Ultimate goal:** 
A fast, state-of-the art, Symfony mini Iot API that will return useful data for your IoT devices included but not limited to:

   1. Datetime in any format. In your Timezone
   2. Build in cache with custom TTL
   3. RSS parsing and lightweight JSON return
   4. Your CALE.es Screen information
   
All with IoT in mind, as fast as possible, logging requests to be able to track use. 
Tiny controller and optimized to the bone running in PHP 7.3 on a Symfony 4.4 Skeleton
