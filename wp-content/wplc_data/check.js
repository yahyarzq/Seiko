const wplc_assets_guid = 'Qv1b3QVHFhKFQFYc';
						const callusElements = document.getElementsByTagName("call-us");
						Array.prototype.forEach.call(callusElements, function (callus) {
							callus.setAttribute('assets-guid', wplc_assets_guid);
						});