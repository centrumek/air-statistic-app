FROM python:3

WORKDIR /www

COPY requirements.txt ./
RUN pip install --no-cache-dir -r requirements.txt

COPY conftest.py
copy test_api.py

CMD [ "python3", "-m py.test" ]