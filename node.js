const express = require('express');
const fs = require('fs');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());

const DATA_FILE = 'users.json';

// Load users from file or initialize empty array
let users = [];
if (fs.existsSync(DATA_FILE)) {
    users = JSON.parse(fs.readFileSync(DATA_FILE));
}

app.post('/signup', (req, res) => {
    const { username, email, password } = req.body;
    if (users.find(user => user.username === username)) {
        return res.status(400).json({ message: 'Username already exists!' });
    }
    users.push({ username, email, password });
    fs.writeFileSync(DATA_FILE, JSON.stringify(users));
    res.json({ message: 'User signed up successfully!' });
});

app.post('/signin', (req, res) => {
    const { username, password } = req.body;
    const user = users.find(user => user.username === username && user.password === password);
    if (user) {
        res.json({ message: 'Sign in successful!' });
    } else {
        res.status(400).json({ message: 'Invalid username or password!' });
    }
});

app.listen(3000, () => {
    console.log('Server running on http://localhost:3000');
});
