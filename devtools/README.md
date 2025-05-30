# Build
$ docker build -t test-image-ubuntu -f Dockerfile.ubuntu .

# Run
$ docker run -it -d --name test-container-ubuntu -v $(pwd)/../microservices/java:/workspace --network test-network test-image-ubuntu

# Access
$ docker exec -it test-container-ubuntu bash

# Cleanup
$ docker stop test-container-ubuntu && docker rm test-container-ubuntu