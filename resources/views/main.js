fetch("https://foreca-weather.p.rapidapi.com/location/search/mumbai?lang=en&country=in", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "foreca-weather.p.rapidapi.com",
        "x-rapidapi-key": "ec71b998ebmshe861b618b344dabp11a79fjsn54b2dc78dd7d"
    }
})

.then(response => response.json())

.then(response => {
        console.log(response);
    })
    .catch(err => {
        console.error(err);
    });