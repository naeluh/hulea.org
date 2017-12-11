require('offline-plugin/runtime').install(
  // When an update is ready, tell ServiceWorker to take control immediately:
  onUpdateReady() {
    console.log('update ready');
    runtime.applyUpdate();
  },

  // Reload to get the new version: 
  onUpdated() {
    console.log('updated');
    location.reload();
  }
);
