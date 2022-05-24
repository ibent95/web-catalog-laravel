let contentLoaderElement: HTMLElement = document.getElementById("loader-content")!;

// On document ready state change event
document.onreadystatechange = (event: any) => {

	// On event target ready state is complete
	if (event.target.readyState === 'complete') {

		// Set content loader element display to `none`
		contentLoaderElement.style.display = "none";
	}

};