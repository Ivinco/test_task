# Test task

```docker-compose up``` will bring up 2 images: 
  * mysql containing table hn.hackernews, user/pass: root/pass
  * php script test.php, figure out yourself what it's doing

Task 1: add to the compose YAML new image (use already existing images as much as possible) - nagios available on localhost on port 81. Make it monitor the mysql each 5 seconds, it should check SHOW PROCESSLIST and if it sees any query running longer than 5 seconds it should trigger CRITICAL alert. Commit your changes and make a merge request.

Task 2: fix the performance issue in test.php / mysql config (find the problem yourself). The point is that the mysql query now takes about 30 sec while it should take a second or less. Commit your changes and make a merge request.

Task 3: add to the compose YAML another image running Manticore Search (or sphinx, no matter). Make it index all from hn.hackernews from the mysql on start and start searchd. Commit and make a MR

Task 4: add to the compose YAML another image running php (or python/whataver else, no matter) + some web server running on port 82. The script should be accessible from outside and should be able to do ...?query=something, go to the searchd, find documents by the query, then go to the mysql, fetch the documents and return that all
