<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Project API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="docs/./collection.json">View Postman collection</a></li>
                            <li><a href="docs/./openapi.yaml">View OpenAPI (Swagger) spec</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 30 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "https://tsm-vootech.target-tech.co";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.6.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://tsm-vootech.target-tech.co</code></pre><h1>Login</h1>
<p>APIs for user authentication</p>
<h2>Login</h2>
<p>if 200 user login in done,
if 401 the username or password is wrong</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MzdkMTMwMy1lMWFlLTQ4MTUtYjJmYi1kMDRjYmJmMTNmOTUiLCJqdGkiOiI1NWZiYTRhMzY5NzEzZGNmZWM2NTJjMzcxNjM1OTVlNGZiM2RhMTUxZjIzMzk2NmViYzkwNDVhNDA2ZWRiZjZlMDE5ZmFlYTY2OGU5M2UxOCIsImlhdCI6MTYyMTY1NDIxNi4xOTk2OTYsIm5iZiI6MTYyMTY1NDIxNi4xOTk3LCJleHAiOjE2NTMxOTAyMTYuMTkzMDA1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Exnm9EroVtTC4zKn3GAhTPqavZJZeHNOqvJEI0crSFvyxN3PwI1kkUeGwltpwvVnxiBT6xMjNns6KzAAUjzLDQPENE67KvXUGzzm5VfSuXezbjcxayPWV19gw8l3ZgJ5aHRSHmKVHvyPLd5mfujMAwSSb9N3QnNH7sxXKq-7c_EM8dfaiT8tyOpWhnlSTwSGoQxLIbY1mes6f3br7V5G8uHqANk8vGql5vhfBLkAsuzg_FIjIq2vYJZDXryi6298W56GdafWwRf-Xlh9Ml8sFLFBbH0j8ub8DYpixhJh3RrDacX851vBUhcwIm5eLjJ2TwSCZCFODZB2CQR61KIQgFwBMu_3EuIwfGRl4oE4_1fQZ2q7V9fobVft6gDQw8pHaML7m2JJVFCDXKlXwTWS_aM2e26jZ1VDzkunmbKctuokG_gpT3R3NO-ZrpU0CN__S3d-ncm4TKJ2-l1Xxusi4i2gdXMhKMpPjyIGzhUZEB_3GPAP6zQqfXTScINvlhG6vLhjj0sPK0UEwtc8lN2_vVzLqpmrirmezeWtODn1HL21cAbPyri5BwTnspcnFJCuxuG2H7RepmlnFV1Tctu1O7khhW3hA65jRXETgOWzRiObxtxDYAMQ6VewfTP9bKjm7spXtG0noXkcURJsYCcWWWr9-YTKZ0Ro9JaCTCVo6xY",
    "user_info": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": 1
    }
}</code></pre>
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
<h2>Logout</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/logout"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
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
</form><h1>Task Category</h1>
<h2>Get All</h2>
<p>if 200 will return all
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 2,
        "name": "New Task Category 222",
        "created_at": "2021-05-23 10:02:31 AM"
    },
    {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    }
]</code></pre>
<div id="execution-results-GETapi-v1-task-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-task-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-task-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-task-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-task-categories"></code></pre>
</div>
<form id="form-GETapi-v1-task-categories" data-method="GET" data-path="api/v1/task-categories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-task-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-task-categories" onclick="tryItOut('GETapi-v1-task-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-task-categories" onclick="cancelTryOut('GETapi-v1-task-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-task-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/task-categories</code></b>
</p>
<p>
<label id="auth-GETapi-v1-task-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-task-categories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_page" data-endpoint="GETapi-v1-task-categories" data-component="url"  hidden>
<br>
optional the resource page number default id 0.
</p>
<p>
<b><code>_take</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_take" data-endpoint="GETapi-v1-task-categories" data-component="url"  hidden>
<br>
optional the resource rows you want to return 10.
</p>
<p>
<b><code>_sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_sort" data-endpoint="GETapi-v1-task-categories" data-component="url"  hidden>
<br>
optional the column want to sort name and default is id.
</p>
<p>
<b><code>_dir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_dir" data-endpoint="GETapi-v1-task-categories" data-component="url"  hidden>
<br>
enum optional the resource direction you want muse be asc or desc and default is desc.
</p>
<p>
<b><code>_filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_filter" data-endpoint="GETapi-v1-task-categories" data-component="url"  hidden>
<br>
optional the search in all column with that keyword that will send.
</p>
</form>
<h2>Create</h2>
<p>If 201 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "name": "name here"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-v1-task-categories-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-task-categories-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-task-categories-create"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-task-categories-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-task-categories-create"></code></pre>
</div>
<form id="form-POSTapi-v1-task-categories-create" data-method="POST" data-path="api/v1/task-categories/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-task-categories-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-task-categories-create" onclick="tryItOut('POSTapi-v1-task-categories-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-task-categories-create" onclick="cancelTryOut('POSTapi-v1-task-categories-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-task-categories-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/task-categories/create</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-task-categories-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-task-categories-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-task-categories-create" data-component="body" required  hidden>
<br>
the name of the task category.
</p>

</form>
<h2>Update</h2>
<p>If 202 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories/1/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "name": "name here"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (202):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}</code></pre>
<div id="execution-results-PUTapi-v1-task-categories--taskCategory--update" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-task-categories--taskCategory--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-task-categories--taskCategory--update"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-task-categories--taskCategory--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-task-categories--taskCategory--update"></code></pre>
</div>
<form id="form-PUTapi-v1-task-categories--taskCategory--update" data-method="PUT" data-path="api/v1/task-categories/{taskCategory}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-task-categories--taskCategory--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-task-categories--taskCategory--update" onclick="tryItOut('PUTapi-v1-task-categories--taskCategory--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-task-categories--taskCategory--update" onclick="cancelTryOut('PUTapi-v1-task-categories--taskCategory--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-task-categories--taskCategory--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/task-categories/{taskCategory}/update</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-task-categories--taskCategory--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-task-categories--taskCategory--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>taskCategory</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="taskCategory" data-endpoint="PUTapi-v1-task-categories--taskCategory--update" data-component="url" required  hidden>
<br>
the resource id.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-task-categories--taskCategory--update" data-component="body" required  hidden>
<br>
the name of the task category.
</p>

</form>
<h2>Delete</h2>
<p>If 200 will delete data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories/1/delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<div id="execution-results-DELETEapi-v1-task-categories--taskCategory--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-task-categories--taskCategory--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-task-categories--taskCategory--delete"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-task-categories--taskCategory--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-task-categories--taskCategory--delete"></code></pre>
</div>
<form id="form-DELETEapi-v1-task-categories--taskCategory--delete" data-method="DELETE" data-path="api/v1/task-categories/{taskCategory}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-task-categories--taskCategory--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-task-categories--taskCategory--delete" onclick="tryItOut('DELETEapi-v1-task-categories--taskCategory--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-task-categories--taskCategory--delete" onclick="cancelTryOut('DELETEapi-v1-task-categories--taskCategory--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-task-categories--taskCategory--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/task-categories/{taskCategory}/delete</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-task-categories--taskCategory--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-task-categories--taskCategory--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>taskCategory</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="taskCategory" data-endpoint="DELETEapi-v1-task-categories--taskCategory--delete" data-component="url" required  hidden>
<br>
the resource id.
</p>
</form><h1>Task Status</h1>
<h2>Get All</h2>
<p>if 200 will return all
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-statuses"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 2,
        "name": "New Task Category 222",
        "created_at": "2021-05-23 10:02:31 AM"
    },
    {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    }
]</code></pre>
<div id="execution-results-GETapi-v1-task-statuses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-task-statuses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-task-statuses"></code></pre>
</div>
<div id="execution-error-GETapi-v1-task-statuses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-task-statuses"></code></pre>
</div>
<form id="form-GETapi-v1-task-statuses" data-method="GET" data-path="api/v1/task-statuses" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-task-statuses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-task-statuses" onclick="tryItOut('GETapi-v1-task-statuses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-task-statuses" onclick="cancelTryOut('GETapi-v1-task-statuses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-task-statuses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/task-statuses</code></b>
</p>
<p>
<label id="auth-GETapi-v1-task-statuses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-task-statuses" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_page" data-endpoint="GETapi-v1-task-statuses" data-component="url"  hidden>
<br>
optional the resource page number default id 0.
</p>
<p>
<b><code>_take</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_take" data-endpoint="GETapi-v1-task-statuses" data-component="url"  hidden>
<br>
optional the resource rows you want to return 10.
</p>
<p>
<b><code>_sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_sort" data-endpoint="GETapi-v1-task-statuses" data-component="url"  hidden>
<br>
optional the column want to sort name and default is id.
</p>
<p>
<b><code>_dir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_dir" data-endpoint="GETapi-v1-task-statuses" data-component="url"  hidden>
<br>
enum optional the resource direction you want muse be asc or desc and default is desc.
</p>
<p>
<b><code>_filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_filter" data-endpoint="GETapi-v1-task-statuses" data-component="url"  hidden>
<br>
optional the search in all column with that keyword that will send.
</p>
</form>
<h2>Create</h2>
<p>If 201 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-statuses/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "name": "name here"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-v1-task-statuses-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-task-statuses-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-task-statuses-create"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-task-statuses-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-task-statuses-create"></code></pre>
</div>
<form id="form-POSTapi-v1-task-statuses-create" data-method="POST" data-path="api/v1/task-statuses/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-task-statuses-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-task-statuses-create" onclick="tryItOut('POSTapi-v1-task-statuses-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-task-statuses-create" onclick="cancelTryOut('POSTapi-v1-task-statuses-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-task-statuses-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/task-statuses/create</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-task-statuses-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-task-statuses-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-task-statuses-create" data-component="body" required  hidden>
<br>
the name of task status.
</p>

</form>
<h2>Update</h2>
<p>If 202 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-statuses/sit/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "name": "name here"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (202):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}</code></pre>
<div id="execution-results-PUTapi-v1-task-statuses--taskStatus--update" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-task-statuses--taskStatus--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-task-statuses--taskStatus--update"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-task-statuses--taskStatus--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-task-statuses--taskStatus--update"></code></pre>
</div>
<form id="form-PUTapi-v1-task-statuses--taskStatus--update" data-method="PUT" data-path="api/v1/task-statuses/{taskStatus}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-task-statuses--taskStatus--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-task-statuses--taskStatus--update" onclick="tryItOut('PUTapi-v1-task-statuses--taskStatus--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-task-statuses--taskStatus--update" onclick="cancelTryOut('PUTapi-v1-task-statuses--taskStatus--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-task-statuses--taskStatus--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/task-statuses/{taskStatus}/update</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-task-statuses--taskStatus--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-task-statuses--taskStatus--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>taskStatus</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="taskStatus" data-endpoint="PUTapi-v1-task-statuses--taskStatus--update" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-task-statuses--taskStatus--update" data-component="body" required  hidden>
<br>
the name of task status.
</p>

</form>
<h2>Delete</h2>
<p>If 200 will delete data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-statuses/1/delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<div id="execution-results-DELETEapi-v1-task-statuses--taskStatus--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-task-statuses--taskStatus--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-task-statuses--taskStatus--delete"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-task-statuses--taskStatus--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-task-statuses--taskStatus--delete"></code></pre>
</div>
<form id="form-DELETEapi-v1-task-statuses--taskStatus--delete" data-method="DELETE" data-path="api/v1/task-statuses/{taskStatus}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-task-statuses--taskStatus--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-task-statuses--taskStatus--delete" onclick="tryItOut('DELETEapi-v1-task-statuses--taskStatus--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-task-statuses--taskStatus--delete" onclick="cancelTryOut('DELETEapi-v1-task-statuses--taskStatus--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-task-statuses--taskStatus--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/task-statuses/{taskStatus}/delete</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-task-statuses--taskStatus--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-task-statuses--taskStatus--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>taskStatus</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="taskStatus" data-endpoint="DELETEapi-v1-task-statuses--taskStatus--delete" data-component="url" required  hidden>
<br>
the resource id.
</p>
</form><h1>Tasks</h1>
<h2>Get All</h2>
<p>if 200 will return all
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 2,
        "title": "Task Title",
        "description": "Task Description",
        "start_date": "2021-06-25",
        "end_date": "2021-08-25",
        "created_at": "2021-05-26 06:57:07 AM",
        "category": {
            "id": 1,
            "name": "New Task Category",
            "created_at": "2021-05-23 10:02:18 AM"
        },
        "status": {
            "id": 1,
            "name": "Updated",
            "created_at": "2021-05-26 06:09:33 AM"
        },
        "users": [
            {
                "id": 1,
                "username": "admin",
                "user_type": "Admin",
                "gender": true,
                "created_at": "2021-05-22 04:31:18 AM"
            }
        ],
        "created_by": {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    },
    {
        "id": 1,
        "title": "Task Title",
        "description": "Task Description",
        "start_date": "2021-06-25",
        "end_date": "2021-08-25",
        "created_at": "2021-05-26 06:56:43 AM",
        "category": {
            "id": 1,
            "name": "New Task Category",
            "created_at": "2021-05-23 10:02:18 AM"
        },
        "status": {
            "id": 1,
            "name": "Updated",
            "created_at": "2021-05-26 06:09:33 AM"
        },
        "users": [
            {
                "id": 1,
                "username": "admin",
                "user_type": "Admin",
                "gender": true,
                "created_at": "2021-05-22 04:31:18 AM"
            },
            {
                "id": 2,
                "username": "user",
                "user_type": "User",
                "gender": true,
                "created_at": "2021-05-22 04:31:18 AM"
            }
        ],
        "created_by": {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    }
]</code></pre>
<div id="execution-results-GETapi-v1-tasks" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tasks"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tasks"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tasks"></code></pre>
</div>
<form id="form-GETapi-v1-tasks" data-method="GET" data-path="api/v1/tasks" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tasks', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tasks" onclick="tryItOut('GETapi-v1-tasks');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tasks" onclick="cancelTryOut('GETapi-v1-tasks');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tasks" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tasks</code></b>
</p>
<p>
<label id="auth-GETapi-v1-tasks" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-tasks" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_page" data-endpoint="GETapi-v1-tasks" data-component="url"  hidden>
<br>
optional the resource page number default id 0.
</p>
<p>
<b><code>_take</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_take" data-endpoint="GETapi-v1-tasks" data-component="url"  hidden>
<br>
optional the resource rows you want to return 10.
</p>
<p>
<b><code>_sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_sort" data-endpoint="GETapi-v1-tasks" data-component="url"  hidden>
<br>
optional the column want to sort name and default is id.
</p>
<p>
<b><code>_dir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_dir" data-endpoint="GETapi-v1-tasks" data-component="url"  hidden>
<br>
enum optional the resource direction you want muse be asc or desc and default is desc.
</p>
<p>
<b><code>_filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_filter" data-endpoint="GETapi-v1-tasks" data-component="url"  hidden>
<br>
optional the search in all column with that keyword that will send.
</p>
</form>
<h2>Create</h2>
<p>If 201 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "category_id": 1,
    "status_id": 1,
    "title": "task title",
    "description": "task description",
    "start_date": "25\/06\/2021",
    "end_date": "25\/08\/2021",
    "users": [
        2,
        7,
        8
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "start_date": "2021-06-25",
    "end_date": "2021-08-25",
    "created_at": "2021-05-26 06:56:43 AM",
    "category": {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    },
    "status": {
        "id": 1,
        "name": "Updated",
        "created_at": "2021-05-26 06:09:33 AM"
    },
    "users": [
        {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        },
        {
            "id": 2,
            "username": "user",
            "user_type": "User",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    ],
    "created_by": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "title": [
            "The title field is required."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-v1-tasks-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-tasks-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tasks-create"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-tasks-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tasks-create"></code></pre>
</div>
<form id="form-POSTapi-v1-tasks-create" data-method="POST" data-path="api/v1/tasks/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tasks-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-tasks-create" onclick="tryItOut('POSTapi-v1-tasks-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-tasks-create" onclick="cancelTryOut('POSTapi-v1-tasks-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-tasks-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/tasks/create</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-tasks-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-tasks-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task category id.
</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task status id.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task title.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task description.
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task start date.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<br>
the task start date.
</p>
<p>
<b><code>users</code></b>&nbsp;&nbsp;<small>integer[]</small>  &nbsp;
<input type="number" name="users.0" data-endpoint="POSTapi-v1-tasks-create" data-component="body" required  hidden>
<input type="number" name="users.1" data-endpoint="POSTapi-v1-tasks-create" data-component="body" hidden>
<br>
the task users id.
</p>

</form>
<h2>Show</h2>
<p>If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/show"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "start_date": "2021-06-25",
    "end_date": "2021-08-25",
    "created_at": "2021-05-26 06:56:43 AM",
    "category": {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    },
    "status": {
        "id": 1,
        "name": "Updated",
        "created_at": "2021-05-26 06:09:33 AM"
    },
    "users": [
        {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        },
        {
            "id": 2,
            "username": "user",
            "user_type": "User",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    ],
    "created_by": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    }
}</code></pre>
<div id="execution-results-GETapi-v1-tasks--task--show" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tasks--task--show"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tasks--task--show"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tasks--task--show" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tasks--task--show"></code></pre>
</div>
<form id="form-GETapi-v1-tasks--task--show" data-method="GET" data-path="api/v1/tasks/{task}/show" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tasks--task--show', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tasks--task--show" onclick="tryItOut('GETapi-v1-tasks--task--show');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tasks--task--show" onclick="cancelTryOut('GETapi-v1-tasks--task--show');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tasks--task--show" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tasks/{task}/show</code></b>
</p>
<p>
<label id="auth-GETapi-v1-tasks--task--show" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-tasks--task--show" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="task" data-endpoint="GETapi-v1-tasks--task--show" data-component="url" required  hidden>
<br>
the resource id.
</p>
</form>
<h2>Update</h2>
<p>If 202 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "category_id": 1,
    "status_id": 1,
    "title": "task title",
    "description": "task description",
    "start_date": "25\/06\/2021",
    "end_date": "25\/08\/2021",
    "users": [
        792013.82225421,
        84.29
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (202):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "start_date": "2021-06-25",
    "end_date": "2021-08-25",
    "created_at": "2021-05-26 06:56:43 AM",
    "category": {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    },
    "status": {
        "id": 1,
        "name": "Updated",
        "created_at": "2021-05-26 06:09:33 AM"
    },
    "users": [
        {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        },
        {
            "id": 2,
            "username": "user",
            "user_type": "User",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    ],
    "created_by": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "title": [
            "The title field is required."
        ]
    }
}</code></pre>
<div id="execution-results-PUTapi-v1-tasks--task--update" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-tasks--task--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tasks--task--update"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-tasks--task--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tasks--task--update"></code></pre>
</div>
<form id="form-PUTapi-v1-tasks--task--update" data-method="PUT" data-path="api/v1/tasks/{task}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tasks--task--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-tasks--task--update" onclick="tryItOut('PUTapi-v1-tasks--task--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-tasks--task--update" onclick="cancelTryOut('PUTapi-v1-tasks--task--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-tasks--task--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/tasks/{task}/update</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-tasks--task--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-tasks--task--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="task" data-endpoint="PUTapi-v1-tasks--task--update" data-component="url" required  hidden>
<br>
the resource id.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task category id.
</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task status id.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task title.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task description.
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task start date.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<br>
the task start date.
</p>
<p>
<b><code>users</code></b>&nbsp;&nbsp;<small>number[]</small>  &nbsp;
<input type="number" name="users.0" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" required  hidden>
<input type="number" name="users.1" data-endpoint="PUTapi-v1-tasks--task--update" data-component="body" hidden>
<br>

</p>

</form>
<h2>Delete</h2>
<p>If 200 will delete data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<div id="execution-results-DELETEapi-v1-tasks--task--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-tasks--task--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tasks--task--delete"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-tasks--task--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tasks--task--delete"></code></pre>
</div>
<form id="form-DELETEapi-v1-tasks--task--delete" data-method="DELETE" data-path="api/v1/tasks/{task}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tasks--task--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-tasks--task--delete" onclick="tryItOut('DELETEapi-v1-tasks--task--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-tasks--task--delete" onclick="cancelTryOut('DELETEapi-v1-tasks--task--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-tasks--task--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/tasks/{task}/delete</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-tasks--task--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-tasks--task--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="task" data-endpoint="DELETEapi-v1-tasks--task--delete" data-component="url" required  hidden>
<br>
the resource id.
</p>
</form>
<h2>Add User To Task</h2>
<p>If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 406 the the user array is empty,
if 406 the the user array is empty,
if 411 the user id inside array is not number,
if 417 the user in array is not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/add-user-to-task"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "users": [
        2,
        7,
        8
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "start_date": "2021-06-25",
    "end_date": "2021-08-25",
    "created_at": "2021-05-26 06:56:43 AM",
    "category": {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    },
    "status": {
        "id": 1,
        "name": "Updated",
        "created_at": "2021-05-26 06:09:33 AM"
    },
    "users": [
        {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        },
        {
            "id": 2,
            "username": "user",
            "user_type": "User",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    ],
    "created_by": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    }
}</code></pre>
<div id="execution-results-POSTapi-v1-tasks--task--add-user-to-task" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-tasks--task--add-user-to-task"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tasks--task--add-user-to-task"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-tasks--task--add-user-to-task" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tasks--task--add-user-to-task"></code></pre>
</div>
<form id="form-POSTapi-v1-tasks--task--add-user-to-task" data-method="POST" data-path="api/v1/tasks/{task}/add-user-to-task" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tasks--task--add-user-to-task', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-tasks--task--add-user-to-task" onclick="tryItOut('POSTapi-v1-tasks--task--add-user-to-task');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-tasks--task--add-user-to-task" onclick="cancelTryOut('POSTapi-v1-tasks--task--add-user-to-task');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-tasks--task--add-user-to-task" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/tasks/{task}/add-user-to-task</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-tasks--task--add-user-to-task" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-tasks--task--add-user-to-task" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="task" data-endpoint="POSTapi-v1-tasks--task--add-user-to-task" data-component="url" required  hidden>
<br>
the resource id.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>users</code></b>&nbsp;&nbsp;<small>integer[]</small>  &nbsp;
<input type="number" name="users.0" data-endpoint="POSTapi-v1-tasks--task--add-user-to-task" data-component="body" required  hidden>
<input type="number" name="users.1" data-endpoint="POSTapi-v1-tasks--task--add-user-to-task" data-component="body" hidden>
<br>
the task users id.
</p>

</form>
<h2>Remove User To Task</h2>
<p>If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 406 the the user array is empty,
if 406 the the user array is empty,
if 411 the user id inside array is not number,
if 417 the user in array is not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/1/remove-user-to-task"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "Task Title",
    "description": "Task Description",
    "start_date": "2021-06-25",
    "end_date": "2021-08-25",
    "created_at": "2021-05-26 06:56:43 AM",
    "category": {
        "id": 1,
        "name": "New Task Category",
        "created_at": "2021-05-23 10:02:18 AM"
    },
    "status": {
        "id": 1,
        "name": "Updated",
        "created_at": "2021-05-26 06:09:33 AM"
    },
    "users": [
        {
            "id": 1,
            "username": "admin",
            "user_type": "Admin",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        },
        {
            "id": 2,
            "username": "user",
            "user_type": "User",
            "gender": true,
            "created_at": "2021-05-22 04:31:18 AM"
        }
    ],
    "created_by": {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    }
}</code></pre>
<div id="execution-results-POSTapi-v1-tasks--task---user--remove-user-to-task" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-tasks--task---user--remove-user-to-task"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tasks--task---user--remove-user-to-task"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-tasks--task---user--remove-user-to-task" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tasks--task---user--remove-user-to-task"></code></pre>
</div>
<form id="form-POSTapi-v1-tasks--task---user--remove-user-to-task" data-method="POST" data-path="api/v1/tasks/{task}/{user}/remove-user-to-task" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tasks--task---user--remove-user-to-task', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-tasks--task---user--remove-user-to-task" onclick="tryItOut('POSTapi-v1-tasks--task---user--remove-user-to-task');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-tasks--task---user--remove-user-to-task" onclick="cancelTryOut('POSTapi-v1-tasks--task---user--remove-user-to-task');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-tasks--task---user--remove-user-to-task" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/tasks/{task}/{user}/remove-user-to-task</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-tasks--task---user--remove-user-to-task" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-tasks--task---user--remove-user-to-task" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>task</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="task" data-endpoint="POSTapi-v1-tasks--task---user--remove-user-to-task" data-component="url" required  hidden>
<br>
the resource id.
</p>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="POSTapi-v1-tasks--task---user--remove-user-to-task" data-component="url" required  hidden>
<br>
the user id to remove in task.
</p>
</form><h1>Users</h1>
<h2>Get All</h2>
<p>if 200 will return all
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "username": "admin",
        "user_type": "Admin",
        "gender": true,
        "created_at": "2021-05-22 04:31:18 AM"
    },
    {
        "id": 1,
        "username": "user",
        "user_type": "User",
        "gender": false,
        "created_at": "2021-05-22 05:00:18 AM"
    }
]</code></pre>
<div id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"></code></pre>
</div>
<div id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users"></code></pre>
</div>
<form id="form-GETapi-v1-users" data-method="GET" data-path="api/v1/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-users" onclick="tryItOut('GETapi-v1-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-users" onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/users</code></b>
</p>
<p>
<label id="auth-GETapi-v1-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-users" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_page" data-endpoint="GETapi-v1-users" data-component="url"  hidden>
<br>
optional the resource page number default id 0.
</p>
<p>
<b><code>_take</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="_take" data-endpoint="GETapi-v1-users" data-component="url"  hidden>
<br>
optional the resource rows you want to return 10.
</p>
<p>
<b><code>_sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_sort" data-endpoint="GETapi-v1-users" data-component="url"  hidden>
<br>
optional the column want to sort name and default is id.
</p>
<p>
<b><code>_dir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_dir" data-endpoint="GETapi-v1-users" data-component="url"  hidden>
<br>
enum optional the resource direction you want muse be asc or desc and default is desc.
</p>
<p>
<b><code>_filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="_filter" data-endpoint="GETapi-v1-users" data-component="url"  hidden>
<br>
optional the search in all column with that keyword that will send.
</p>
</form>
<h2>Create</h2>
<p>If 201 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/users/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "username": "name here",
    "password": "12345678",
    "gender": true,
    "user_type": "Admin"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "username": "admin",
    "user_type": "Admin",
    "gender": true,
    "created_at": "2021-05-22 04:31:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">
{
    "message": "The given data was invalid.",
    "errors": {
        "username": [
            "The username field is required."
        ],
        "password": [
            "The password must contain at least one uppercase and one lowercase letter.",
            "The password must contain at least one number."
        ],
        "user_type": [
            "The user type field is required."
        ],
    }
}
</code></pre>
<div id="execution-results-POSTapi-v1-users-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-create"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-create"></code></pre>
</div>
<form id="form-POSTapi-v1-users-create" data-method="POST" data-path="api/v1/users/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-users-create" onclick="tryItOut('POSTapi-v1-users-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-users-create" onclick="cancelTryOut('POSTapi-v1-users-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-users-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/users/create</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-users-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-users-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-v1-users-create" data-component="body" required  hidden>
<br>
the username.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-users-create" data-component="body" required  hidden>
<br>
the password of the user.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-users-create" hidden><input type="radio" name="gender" value="true" data-endpoint="POSTapi-v1-users-create" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-users-create" hidden><input type="radio" name="gender" value="false" data-endpoint="POSTapi-v1-users-create" data-component="body" required ><code>false</code></label>
<br>
the gender of the user it could be true(male) or false(female) or 1 and 0.
</p>
<p>
<b><code>user_type</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="user_type" data-endpoint="POSTapi-v1-users-create" data-component="body" required  hidden>
<br>
the user type of the user must be one of these [Admin, User].
</p>

</form>
<h2>Update</h2>
<p>If 202 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/users/1/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "username": "name here",
    "password": "12345678",
    "gender": true,
    "user_type": "Admin"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (406):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (202):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "username": "admin",
    "user_type": "Admin",
    "gender": true,
    "created_at": "2021-05-22 04:31:18 AM"
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">
{
    "message": "The given data was invalid.",
    "errors": {
        "username": [
            "The username field is required."
        ],
        "password": [
            "The password must contain at least one uppercase and one lowercase letter.",
            "The password must contain at least one number."
        ],
        "user_type": [
            "The user type field is required."
        ],
    }
}
</code></pre>
<div id="execution-results-PUTapi-v1-users--user--update" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-users--user--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-users--user--update"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-users--user--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-users--user--update"></code></pre>
</div>
<form id="form-PUTapi-v1-users--user--update" data-method="PUT" data-path="api/v1/users/{user}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-users--user--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-users--user--update" onclick="tryItOut('PUTapi-v1-users--user--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-users--user--update" onclick="cancelTryOut('PUTapi-v1-users--user--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-users--user--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/users/{user}/update</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-users--user--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-users--user--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="PUTapi-v1-users--user--update" data-component="url" required  hidden>
<br>
the resource id.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="PUTapi-v1-users--user--update" data-component="body" required  hidden>
<br>
the username.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="PUTapi-v1-users--user--update" data-component="body" required  hidden>
<br>
the password of the user.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-users--user--update" hidden><input type="radio" name="gender" value="true" data-endpoint="PUTapi-v1-users--user--update" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-users--user--update" hidden><input type="radio" name="gender" value="false" data-endpoint="PUTapi-v1-users--user--update" data-component="body" required ><code>false</code></label>
<br>
the gender of the user it could be true(male) or false(female) or 1 and 0.
</p>
<p>
<b><code>user_type</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="user_type" data-endpoint="PUTapi-v1-users--user--update" data-component="body" required  hidden>
<br>
the user type of the user must be one of these [Admin, User].
</p>

</form>
<h2>Delete</h2>
<p>If 200 will delete data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/users/1/delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<div id="execution-results-DELETEapi-v1-users--user--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-users--user--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--user--delete"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-users--user--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--user--delete"></code></pre>
</div>
<form id="form-DELETEapi-v1-users--user--delete" data-method="DELETE" data-path="api/v1/users/{user}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--user--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-users--user--delete" onclick="tryItOut('DELETEapi-v1-users--user--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-users--user--delete" onclick="cancelTryOut('DELETEapi-v1-users--user--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-users--user--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/users/{user}/delete</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-users--user--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-users--user--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="DELETEapi-v1-users--user--delete" data-component="url" required  hidden>
<br>
the resource id.
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
