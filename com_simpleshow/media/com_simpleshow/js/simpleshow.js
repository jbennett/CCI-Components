(function (window, document, undefined) {
	
	function setupSlideshow(container) {
		var current, next, description, images, index,
			next_toggle, images_toggles, i, t,
			duration, transition;
			
		transition = 1500;
		duration = 3000
		
		current = container.getElement('.current');
		next = container.getElement('.next');
		next.setStyle('display', 'block');
		description = current.getElement('.description');
		images = container.getElements('.image');
		index = 0;
		
		next_toggle = new Fx.Style(next, 'opacity', {
			duration: transition
		});
		next_toggle.set(0);
		images_toggles = new Array();
		
		for (i = 0; i < images.length; i++) {
			t = new Fx.Style(images[i], 'opacity', {
				duration: transition,
				onComplete: function() {
					if (this.now != 1)
						return;
						
					current.getElement('img').src = next.getElement('img').src;
					current.getElement('.title').setText(next.getElement('.title').getText());
					current.getElement('.subtitle').setText(next.getElement('.subtitle').getText());
						
					(function() {
						images_toggles[index].start(0.5);

						index++;
						if (index == images.length)
							index = 0;
						images_toggles[index].start(1);
						
						next_toggle.set(0);
						next.getElement('img').src = '/images/stories/headers/' + images[index].getProperty('data-filename');
						next.getElement('.title').setText(images[index].getProperty('data-title'));
						next.getElement('.subtitle').setText(images[index].getProperty('data-subtitle'));
						next_toggle.start(1);
						
						console.log(next.getElement('.title'));
						console.log(images[index].getProperty('data-title'));
					}).delay(transition);
				}
			});
			
			if (i != 0)
				t.set(0.5);
			images_toggles.push(t);
		}
		
		(function() {
			images_toggles[index].start(0.5);
			
			index++;
			if (index == images.length)
				index = 0;
			images_toggles[index].start(1);
			
			next.getElement('img').src = '/images/stories/headers/' + images[index].getProperty('data-filename');
			next.getElement('.title').setText(images[index].getProperty('data-title'));
			next.getElement('.subtitle').setText(images[index].getProperty('data-subtitle'));
			next_toggle.start(1);
		}).delay(duration);
	};
	
	window.addEvent('domready', function() {
		$$('.mod_simpleshow').each(function(show) {
			setupSlideshow(show);
		});
	});
})(this, this.document);