<!DOCTYPE html>
<html>
<head>
    <title>User API</title>
    <style type="text/css">
        body {
            font-family: Trebuchet MS, sans-serif;
            font-size: 15px;
            color: #444;
            margin-right: 24px;
        }

        h1 {
            font-size: 25px;
        }

        h2 {
            font-size: 20px;
        }

        h3 {
            font-size: 16px;
            font-weight: bold;
        }

        hr {
            height: 1px;
            border: 0;
            color: #ddd;
            background-color: #ddd;
            display: none;
        }

        .app-desc {
            clear: both;
            margin-left: 20px;
        }

        .param-name {
            width: 100%;
        }

        .license-info {
            margin-left: 20px;
        }

        .license-url {
            margin-left: 20px;
        }

        .model {
            margin: 0 0 0px 20px;
        }

        .method {
            margin-left: 20px;
        }

        .method-notes {
            margin: 10px 0 20px 0;
            font-size: 90%;
            color: #555;
        }

        pre {
            padding: 10px;
            margin-bottom: 2px;
        }

        .http-method {
            text-transform: uppercase;
        }

        pre.get {
            background-color: #0f6ab4;
        }

        pre.post {
            background-color: #10a54a;
        }

        pre.put {
            background-color: #c5862b;
        }

        pre.delete {
            background-color: #a41e22;
        }

        .huge {
            color: #fff;
        }

        pre.example {
            background-color: #f3f3f3;
            padding: 10px;
            border: 1px solid #ddd;
        }

        code {
            white-space: pre;
        }

        .nickname {
            font-weight: bold;
        }

        .method-path {
            font-size: 1.5em;
            background-color: #0f6ab4;
        }

        .up {
            float: right;
        }

        .parameter {
            width: 500px;
        }

        .param {
            width: 500px;
            padding: 10px 0 0 20px;
            font-weight: bold;
        }

        .param-desc {
            width: 700px;
            padding: 0 0 0 20px;
            color: #777;
        }

        .param-type {
            font-style: italic;
        }

        .param-enum-header {
            width: 700px;
            padding: 0 0 0 60px;
            color: #777;
            font-weight: bold;
        }

        .param-enum {
            width: 700px;
            padding: 0 0 0 80px;
            color: #777;
            font-style: italic;
        }

        .field-label {
            padding: 0;
            margin: 0;
            clear: both;
        }

        .field-items {
            padding: 0 0 15px 0;
            margin-bottom: 15px;
        }

        .return-type {
            clear: both;
            padding-bottom: 10px;
        }

        .param-header {
            font-weight: bold;
        }

        .method-tags {
            text-align: right;
        }

        .method-tag {
            background: none repeat scroll 0% 0% #24A600;
            border-radius: 3px;
            padding: 2px 10px;
            margin: 2px;
            color: #FFF;
            display: inline-block;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>User API</h1>

<div class="app-desc">API de acesso aos usuários</div>
<div class="app-desc">Version: 1.0.0</div>
<div class="license-info">All rights reserved</div>
<div class="license-url">http://apache.org/licenses/LICENSE-2.0.html</div>
<h2>Access</h2>


<h2><a name="__Methods">Methods</a></h2>
[ Jump to <a href="#__Models">Models</a> ]


<h2>Table of Contents </h2>

<div class="method-summary"></div>

<ol>


    <li><a href="#idDelete"><code><span class="http-method">delete</span> /{id}</code></a></li>

    <li><a href="#idGet"><code><span class="http-method">get</span> /{id}</code></a></li>

    <li><a href="#idPut"><code><span class="http-method">put</span> /{id}</code></a></li>

    <li><a href="#rootPost"><code><span class="http-method">post</span> /</code></a></li>


</ol>


<div class="method"><a name="idDelete"/>

    <div class="method-path">
        <a class="up" href="#__Methods">Up</a>
        <pre class="delete"><code class="huge"><span class="http-method">delete</span> /{id}</code></pre>
    </div>
    <div class="method-summary">Exclui usuário (<span class="nickname">idDelete</span>)</div>

    <div class="method-notes"></div>


    <h3 class="field-label">Path parameters</h3>

    <div class="field-items">
        <div class="param">id (required)</div>

        <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; id do usuário</div>
    </div>
    <!-- field-items -->


    <!--Todo: process Response Object and its headers, schema, examples -->


    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="heaader">Content-Type</span> response header.
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Responses</h3>

    <h4 class="field-label">200</h4>
    Usuário excluído


</div>
<!-- method -->
<hr/>

<div class="method"><a name="idGet"/>

    <div class="method-path">
        <a class="up" href="#__Methods">Up</a>
        <pre class="get"><code class="huge"><span class="http-method">get</span> /{id}</code></pre>
    </div>
    <div class="method-summary">Exibe um usuário (<span class="nickname">idGet</span>)</div>

    <div class="method-notes"></div>


    <h3 class="field-label">Path parameters</h3>

    <div class="field-items">
        <div class="param">id (required)</div>

        <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; id do usuário</div>
    </div>
    <!-- field-items -->


    <!--Todo: process Response Object and its headers, schema, examples -->


    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="heaader">Content-Type</span> response header.
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Responses</h3>

    <h4 class="field-label">200</h4>
    Usuário OK


</div>
<!-- method -->
<hr/>

<div class="method"><a name="idPut"/>

    <div class="method-path">
        <a class="up" href="#__Methods">Up</a>
        <pre class="put"><code class="huge"><span class="http-method">put</span> /{id}</code></pre>
    </div>
    <div class="method-summary">Edita um usuário (<span class="nickname">idPut</span>)</div>

    <div class="method-notes"></div>


    <h3 class="field-label">Path parameters</h3>

    <div class="field-items">
        <div class="param">id (required)</div>

        <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; id do usuário</div>
    </div>
    <!-- field-items -->


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="heaader">Content-Type</span> request header:
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Request body</h3>

    <div class="field-items">
        <div class="param">usuario (required)</div>

        <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash;  </div>
    </div>
    <!-- field-items -->


    <!--Todo: process Response Object and its headers, schema, examples -->


    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="heaader">Content-Type</span> response header.
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Responses</h3>

    <h4 class="field-label">200</h4>
    Usuário OK


</div>
<!-- method -->
<hr/>

<div class="method"><a name="rootPost"/>

    <div class="method-path">
        <a class="up" href="#__Methods">Up</a>
        <pre class="post"><code class="huge"><span class="http-method">post</span> /</code></pre>
    </div>
    <div class="method-summary">Cria novo usuário (<span class="nickname">rootPost</span>)</div>

    <div class="method-notes"></div>


    <h3 class="field-label">Consumes</h3>
    This API call consumes the following media types via the <span class="heaader">Content-Type</span> request header:
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Request body</h3>

    <div class="field-items">
        <div class="param">usuario (required)</div>

        <div class="param-desc"><span class="param-type">Body Parameter</span> &mdash;  </div>
    </div>
    <!-- field-items -->


    <h3 class="field-label">Return type</h3>

    <div class="return-type">
        <a href="#Usuario">Usuario</a>

    </div>


    <!--Todo: process Response Object and its headers, schema, examples -->


    <h3 class="field-label">Produces</h3>
    This API call produces the following media types according to the <span class="header">Accept</span> request header;
    the media type will be conveyed by the <span class="heaader">Content-Type</span> response header.
    <ul>

        <li><code>application/json</code></li>

    </ul>


    <h3 class="field-label">Responses</h3>

    <h4 class="field-label">201</h4>
    Novo usuário criado


</div>
<!-- method -->
<hr/>


<div class="up"><a href="#__Models">Up</a></div>
<h2><a name="__Models">Models</a></h2>
[ Jump to <a href="#__Methods">Methods</a> ]

<h2>Table of Contents</h2>
<ol>


    <li><a href="#Usuario"><code>Usuario</code></a></li>


</ol>


<div class="model">
    <h3 class="field-label"><a name="Usuario">Usuario</a> <a class="up" href="#__Models">Up</a></h3>

    <div class="field-items">
        <div class="param">first_name</div>
        <div class="param-desc"><span class="param-type">String</span></div>

        <div class="param">last_name</div>
        <div class="param-desc"><span class="param-type">String</span></div>

        <div class="param">email</div>
        <div class="param-desc"><span class="param-type">String</span></div>

        <div class="param">password</div>
        <div class="param-desc"><span class="param-type">String</span></div>

        <div class="param">cidade</div>
        <div class="param-desc"><span class="param-type">String</span></div>

        <div class="param">uf</div>
        <div class="param-desc"><span class="param-type">String</span></div>


    </div>
    <!-- field-items -->
</div>


</body>
</html>