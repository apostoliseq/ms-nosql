# Build
docker build -t test-image-nginx -f Dockerfile.nginx .

# Run
docker run --name test-container-nginx -d -p 8080:80 test-image-nginx

# Test
http://localhost:8080/test-nginx.txt

# Access
docker exec -it test-container-nginx bash