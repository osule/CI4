# CodeIgniter 4 Application Starter

## Purpose

A dockerized setup of CI4 to allow quick running of experiments.

## Build image

```bash
docker build -t ci-news .
```

## Start application

```bash
docker run --rm -it --publish 18080:18080 -v "$(pwd)/app:/usr/src/app/app" -w '/usr/src/app' ci-news php spark serve --port 18080 --host 0.0.0.0
```

## Test AJAX request.

Navigate to [http://localhost:18080/home/exp_ajax](http://localhost:18080/home/ajax) in browser.

