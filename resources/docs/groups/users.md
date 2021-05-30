# Users


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
    "https://tsm-vootech.target-tech.co/api/v1/users"
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
]
```
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
    "username": "admin",
    "user_type": "Admin",
    "gender": true,
    "created_at": "2021-05-22 04:31:18 AM"
}
```
> Example response (422):

```json

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

```
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
    "username": "admin",
    "user_type": "Admin",
    "gender": true,
    "created_at": "2021-05-22 04:31:18 AM"
}
```
> Example response (422):

```json

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

```
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
    "https://tsm-vootech.target-tech.co/api/v1/users/1/delete"
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



