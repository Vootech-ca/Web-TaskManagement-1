# Login
APIs for user authentication

## Login
if 200 user login in done,
if 401 the username or password is wrong




> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/login"
);

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "username": "admin.",
    "password": "demodemo."
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (401):

```json
{}
```
> Example response (200):

```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzdkMTMwMy1lMWFlLTQ4MTUtYjJmYi1kMDRjYmJmMTNmOTUiLCJqdGkiOiI1NWZiYTRhMzY5NzEzZGNmZWM2NTJjMzcxNjM1OTVlNGZiM2RhMTUxZjIzMzk2NmViYzkwNDVhNDA2ZWRiZjZlMDE5ZmFlYTY2OGU5M2UxOCIsImlhdCI6MTYyMTY1NDIxNi4xOTk2OTYsIm5iZiI6MTYyMTY1NDIxNi4xOTk3LCJleHAiOjE2NTMxOTAyMTYuMTkzMDA1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Exnm9EroVtTC4zKn3GAhTPqavZJZeHNOqvJEI0crSFvyxN3PwI1kkUeGwltpwvVnxiBT6xMjNns6KzAAUjzLDQPENE67KvXUGzzm5VfSuXezbjcxayPWV19gw8l3ZgJ5aHRSHmKVHvyPLd5mfujMAwSSb9N3QnNH7sxXKq-7c_EM8dfaiT8tyOpWhnlSTwSGoQxLIbY1mes6f3br7V5G8uHqANk8vGql5vhfBLkAsuzg_FIjIq2vYJZDXryi6298W56GdafWwRf-Xlh9Ml8sFLFBbH0j8ub8DYpixhJh3RrDacX851vBUhcwIm5eLjJ2TwSCZCFODZB2CQR61KIQgFwBMu_3EuIwfGRl4oE4_1fQZ2q7V9fobVft6gDQw8pHaML7m2JJVFCDXKlXwTWS_aM2e26jZ1VDzkunmbKctuokG_gpT3R3NO-ZrpU0CN__S3d-ncm4TKJ2-l1Xxusi4i2gdXMhKMpPjyIGzhUZEB_3GPAP6zQqfXTScINvlhG6vLhjj0sPK0UEwtc8lN2_vVzLqpmrirmezeWtODn1HL21cAbPyri5BwTnspcnFJCuxuG2H7RepmlnFV1Tctu1O7khhW3hA65jRXETgOWzRiObxtxDYAMQ6VewfTP9bKjm7spXtG0noXkcURJsYCcWWWr9-YTKZ0Ro9JaCTCVo6xY",
    "user_info": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": 1
    }
}
```
<div id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</div>
<form id="form-POSTapi-v1-login" data-method="POST" data-path="api/v1/login" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-login" onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-login" onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-v1-login" data-component="body" required  hidden>
<br>
the username of the user.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-login" data-component="body" required  hidden>
<br>
The password of the user.
</p>

</form>


## Logout

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/logout"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{}
```
<div id="execution-results-GETapi-v1-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-logout"></code></pre>
</div>
<form id="form-GETapi-v1-logout" data-method="GET" data-path="api/v1/logout" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-logout" onclick="tryItOut('GETapi-v1-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-logout" onclick="cancelTryOut('GETapi-v1-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/logout</code></b>
</p>
<p>
<label id="auth-GETapi-v1-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-logout" data-component="header"></label>
</p>
</form>



