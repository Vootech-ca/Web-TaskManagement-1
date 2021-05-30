# Tasks


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
    "https://tsm-vootech.target-tech.co/api/v1/tasks"
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
]
```
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
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "title": [
            "The title field is required."
        ]
    }
}
```
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


## Show
If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/show"
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
> Example response (404):

```json
{}
```
> Example response (201):

```json
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
```
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
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "title": [
            "The title field is required."
        ]
    }
}
```
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
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/delete"
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


## Add User To Task
If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 406 the the user array is empty,
if 406 the the user array is empty,
if 411 the user id inside array is not number,
if 417 the user in array is not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
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
> Example response (201):

```json
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
```
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


## Remove User To Task
If 200 will return the single data,
if 400 there is an error in sending parameters,
if 401 there is an error in token,
if 404 the resource not found,
if 406 the the user array is empty,
if 406 the the user array is empty,
if 411 the user id inside array is not number,
if 417 the user in array is not found,
if 500 there is an error in server,

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "https://tsm-vootech.target-tech.co/api/v1/tasks/1/1/remove-user-to-task"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
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
> Example response (404):

```json
{}
```
> Example response (201):

```json
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
```
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
</form>



