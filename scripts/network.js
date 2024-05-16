// Constants
const targetUrl = "Controllers/base.php";

// Form functons
function createFormData(data) {
	const str = JSON.stringify(data);
	const fd = new FormData();
	fd.append("data", str);
	return fd;
}
function createHeaders(method = "GET", data) {
	const headers = {
		method: method,
	};
	if (data !== undefined) headers.body = createFormData(data);
	return headers;
}
function createUrl(target, params) {
	const url = new URL(window.origin);
	url.pathname = target;
	for (key in params) url.searchParams.append(key, params[key]);
	return url;
}

//
async function result_alert(f) {
	window.alert(JSON.stringify(await f()));
}
async function test() {
	return new Promise(
		(res) => setTimeout(() => res("Ok")),
		Math.random() * 1000
	);
}

// Request functions
async function send_get_all() {
	const url = createUrl(targetUrl);
	const resp = await fetch(url);
	return await resp.json();
}
async function send_get_one() {
	const id = 123; // DEBUG
	const url = createUrl(targetUrl, { id: id });
	const resp = await fetch(url);
	return await resp.json();
}
async function send_post() {
	const obj = { n: 123, txt: "test" }; //DEBUG
	const headers = createHeaders("POST", obj);
	const url = createUrl(targetUrl);
	const req = await fetch(url, headers);
	return await req.json();
}
async function send_update() {
	const obj = { n: 123, txt: "test" }; //DEBUG
	const headers = createHeaders("PUT", obj);
	const id = 123; // DEBUG
	const url = createUrl(targetUrl, { id: id });
	const req = await fetch(url, headers);
	return await req.json();
}
async function send_delete() {
	const headers = createHeaders("DELETE");
	const id = 123; // DEBUG
	const url = createUrl(targetUrl, { id: id });
	const req = await fetch(url, headers);
	return await req.json();
}
