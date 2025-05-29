from flask import Flask
from pymongo import MongoClient

app = Flask(__name__)

client = MongoClient('mongodb://test-container-mongo:27017/')
db = client['test']
collection = db['coll']

@app.route('/test-python')
def hello_world():
    return "Hello World!"

@app.route('/test-get')
def get_data():
    result = collection.find_one({"name": "Max"})
    return str(result)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
