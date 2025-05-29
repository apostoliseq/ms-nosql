# Build
docker build -t test-image-nginx -f Dockerfile.nginx .

# Run
docker run --name test-container-nginx -d -p 8080:80 test-image-nginx

# Access
docker exec -it test-container-nginx bash

# Test
http://localhost:8080/test-page.txt