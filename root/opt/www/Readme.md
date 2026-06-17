# Apache Reverse Proxy

This content is delivered by the `reverse proxy` service itself.

```
            +------------+                +---------------+
            | Apache     |                | Apache + PHP  |
            | Reverse    |                | Backend       |
  +-------->+ Proxy      +--------------->+ Service       |
            |            |                |               |
            +------------+                +---------------+

```

## Go to Backend Service

Open <a href="./backend/">/backend/</a> to reach the backend service.

We want to analyze HTTP requests between the `reverse proxy` and the `backend service`. A quick <a href="./backend/printheader.php">printheader.php</a> page running on the `backend service` shows what has been sent by the reverse proxy.




