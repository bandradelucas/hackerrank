'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });
    
    main();    
});

function readLine() {
    return inputString[currentLine++];
}

const vowels = [
    'a',
    'e',
    'i',
    'o',
    'u'
];

/*
 * Complete the vowelsAndConsonants function.
 * Print your output using 'console.log()'.
 */
function vowelsAndConsonants(s) {
    for (const c of s) {
        if (vowels.includes(c)) console.log(c);
    }

    for (const c of s) {
        if (!vowels.includes(c)) console.log(c);
    }
}

