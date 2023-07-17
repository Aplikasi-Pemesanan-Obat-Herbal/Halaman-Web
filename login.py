from flask import Flask, request, jsonify

app = Flask(__name__)

# Simulasi database pengguna
users = [
    {'username': 'admin', 'password': 'admin123'},
    {'username': 'user1', 'password': 'password1'},
    {'username': 'user2', 'password': 'password2'}
]

@app.route('/login', methods=['POST'])
def login():
    data = request.get_json()
    username = data['username']
    password = data['password']
    
    # Periksa kecocokan username dan password
    for user in users:
        if user['username'] == username and user['password'] == password:
            return jsonify({'message': 'Login berhasil'})
    
    # Jika tidak ada kecocokan, kirimkan pesan kesalahan
    return jsonify({'message': 'Username atau password salah'}), 401

if __name__ == '__main__':
    app.run()
