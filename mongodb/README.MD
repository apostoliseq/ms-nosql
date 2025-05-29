# Build
docker build -t test-image-mongo -f Dockerfile.mongo .

# Run
docker run --name test-container-mongo -d -p 27017:27017 test-image-mongo

# Access
docker exec -it test-container-mongo bash

# Test
netstat -tlnp | grep 27017

tcp        0      0 0.0.0.0:27017           0.0.0.0:*               LISTEN      -                   
tcp6       0      0 :::27017                :::*                    LISTEN      -  