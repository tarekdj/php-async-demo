require('isomorphic-fetch');


['https://reactphp.org', 'https://google.com', 'https://www.php.net'].map(
    (url) => {
        fetch(url)
            .then((response) => {
                response.text().then(text => {
                    console.log(`GET ${url}; Status: ${response.status};`);
                })
            })
})
