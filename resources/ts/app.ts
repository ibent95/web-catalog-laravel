let contentLoaderElement: HTMLElement = document.getElementById("loader-content")!;

// On document ready state change event
document.onreadystatechange = (event: any) => {

	// On event target ready state is complete
	if (event.target.readyState === 'complete') {

		// Check for PWA support
		if ('serviceWorker' in navigator && 'PushManager' in window) {
			window.addEventListener('load', function () {
				navigator.serviceWorker.register('/service-worker.js').then(function (registration) {
					// Registration was successful
					console.log('ServiceWorker registration successful with scope: ', registration.scope);
				}, function (err) {
					// registration failed :(
					console.log('ServiceWorker registration failed: ', err);
				});
			});
		}

		// Set content loader element display to `none`
		contentLoaderElement.style.display = "none";
	}

};