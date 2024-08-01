from flask import render_template, request
from flaskr import app
from flaskr.db import get_db
import os

@app.route('/')
@app.route('/index')
def index():
    return render_template('blog/index.html')


@app.template_filter('search_filename')
def search_filename(filename_to_search):
    folders = ['flaskr/static/certificate/S1', 'flaskr/static/certificate/S2',
               'flaskr/static/certificate/S3', 'flaskr/static/certificate/S4',
               'flaskr/static/certificate/S5']
    matches = []
    for folder in folders:
        if os.path.isdir(folder):  # Check if folder exists
            for filename in os.listdir(folder):
                if filename.endswith(".pdf") and filename[:-4] == filename_to_search:
                    matches.append(folder.split('/')[3])
        else:
            print("did not find")
    return matches
