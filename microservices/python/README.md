# Build
$ docker build -t test-image-python -f Dockerfile.python .

# Run
$ docker run --name test-container-python --network test-network -d -p 5000:5000 test-image-python

# Access
$ docker exec -it test-container-python sh

# Test
http://localhost:5000/test-python