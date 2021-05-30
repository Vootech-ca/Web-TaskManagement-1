# Task Category


## Get All
if 200 will return all
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories"
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


> Example response (400):

```json
{}
```
> Example response (401):

```json
{}
```
> Example response (200):

```json
[
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
]
```
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


## Create
If 201 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (400):

```json
{}
```
> Example response (401):

```json
{}
```
> Example response (404):

```json
{}
```
> Example response (406):

```json
{}
```
> Example response (201):

```json
{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}
```
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


## Update
If 202 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (400):

```json
{}
```
> Example response (401):

```json
{}
```
> Example response (404):

```json
{}
```
> Example response (406):

```json
{}
```
> Example response (202):

```json
{
    "id": 1,
    "name": "New Task Category",
    "created_at": "2021-05-23 10:02:18 AM"
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ]
    }
}
```
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


## Delete
If 200 will delete data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/task-categories/1/delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{}
```
> Example response (400):

```json
{}
```
> Example response (401):

```json
{}
```
> Example response (404):

```json
{}
```
> Example response (500):

```json
{}
```
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
</form>



