# Build
$ docker build -t test-image-java -f Dockerfile.java .

# Run
$ docker run --name test-container-java --network test-network -d -p 8080:8080 test-image-java

# Access
$ docker exec -it test-container-java sh

# Quarkus init
$ 

# Test
http://localhost:5001/test-java
