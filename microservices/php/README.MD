# Build
$ docker build -t test-image-php -f Dockerfile.php .

# Run
$ docker run --name test-container-php --network test-network -d -p 5000:5000 test-image-php

# Access
$ docker exec -it test-container-php sh

# Test
http://localhost:5001/test-php