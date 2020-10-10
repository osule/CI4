# CodeIgniter 4 Application Starter


## Build image

```bash
docker build -t ci-news .
```

## Start application

```bash
docker run --rm -it --publish 18080:18080 -v "$(pwd):/usr/src/app" -w '/usr/src/app' ci-news php spark serve --port 18080 --host 0.0.0.0
```

