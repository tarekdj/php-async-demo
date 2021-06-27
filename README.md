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
real    0m 1.11s
user    0m 0.05s
sys     0m 0.05s
PHP async
=======
string(56) "GET https://www.php.net; Status: 200; Body length: 25935"
string(54) "GET https://google.com; Status: 200; Body length: 9128"
string(57) "GET https://reactphp.org; Status: 200; Body length: 59825"
Node js
=======
real    0m 0.59s
user    0m 0.07s
sys     0m 0.00s
GET https://google.com; Status: 200;
GET https://www.php.net; Status: 200;
GET https://reactphp.org; Status: 200;
real    0m 0.54s
user    0m 0.11s
sys     0m 0.06s

```