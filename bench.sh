#!/bin/bash

echo "PHP sync"
echo "======="
time php ./examples/http-client-sync.php

echo "PHP async"
echo "======="
time php ./examples/http-client.php

echo "Node js"
echo "======="
time node test.js