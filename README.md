# php-async-demo

## Build the docker image
```docker build -t php-fiber .```

## Run the Docker bench

```docker run php-fiber```

## Example output
```
PHP sync
=======
string(38) "GET https://reactphp.org; Status: 200;"
string(36) "GET https://google.com; Status: 200;"
string(37) "GET https://www.php.net; Status: 200;"
real    0m 1.06s
user    0m 0.04s
sys     0m 0.04s
PHP async
=======
string(36) "GET https://google.com; Status: 200;"
string(37) "GET https://www.php.net; Status: 200;"
string(38) "GET https://reactphp.org; Status: 200;"
real    0m 0.57s
user    0m 0.05s
sys     0m 0.01s
Node js
=======
GET https://google.com; Status: 200;
GET https://www.php.net; Status: 200;
GET https://reactphp.org; Status: 200;
real    0m 0.55s
user    0m 0.09s
sys     0m 0.06s

```