const json = require('./music.json');
const http = require('https');
const fs = require('fs');

for(let i = 0; i<json.length; i++){
    const file = fs.createWriteStream("C:\\Users\\BB_Artem\\Documents\\ФЗ-44\\"+json[i].title+'.mp3');

    const request = http.get(json[i].audio, (res) => {
        res.pipe(file);
        file.on('finish', () => {
            file.close();
            console.log('Completed');
        })
    })
}