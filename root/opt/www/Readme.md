# Apache Reverse Proxy

This content is being delivered by the `reverse proxy` service itself! 

```
            +------------+                +---------------+
            | Apache     |                | Apache + PHP  |
            | Reverse    |                | Backend       |
  +-------->+ Proxy      +--------------->+ Service       |
            |            |                |               |
            +------------+                +---------------+

```

## Go to Backend Service

Please connect to the <a href="./backend/"> /backend </a> URL if you want to reach the backend service.

We want to analyze http requests between the `reverse proxy` and the `backend service`. A quick and dirthy `printheaders.php` running on the `backend service` is giving you an idea of what has been sent by the reverse proxy. 






