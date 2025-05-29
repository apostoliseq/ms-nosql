# Build
docker build -t test-image-mongo -f Dockerfile.mongo .

# Run
docker run --name test-container-mongo -d -p 27017:27017 test-image-mongo

# Test
netstat -tlnp | grep 27017

tcp        0      0 0.0.0.0:27017           0.0.0.0:*               LISTEN      -                   
tcp6       0      0 :::27017                :::*                    LISTEN      -  

# Access
docker exec -it test-container-mongo bash

## Connect via mongosh
mongosh # connects to mongodb://127.0.0.1:27017 by default

## Show Databases
show dbs
db # prints the current database

## Show Collections
show collections

## CRUD
### Create
db.coll.insertOne({name: "Max"})

### Verify
db.coll.find({name: "Max"})