let currentOpen = null;

function showContent(type) {
  const contentArea = document.getElementById("main-content");

  // Toggle off if already open
  if (currentOpen === type) {
    contentArea.innerHTML = "";
    currentOpen = null;
    return;
  }

  currentOpen = type;

  if (type === "profile") {
    contentArea.innerHTML = `
      <h1>My Profile</h1>
      <p><strong>Username:</strong> urhan1798</p>
      <p><strong>Phone:</strong> 017xxxxxxxx</p>
      <p><strong>Password:</strong> ••••••••</p>
    `;
  } else if (type === "order") {
    contentArea.innerHTML = `
      <h1>Order History</h1>
      <p>You have 2 past orders:</p>
      <ul>
        <li>Order #1234 - Delivered</li>
        <li>Order #5678 - Pending</li>
      </ul>
    `;
  } else if (type === "about") {
    contentArea.innerHTML = `
      <h1>About Us</h1>
      <p>This is a demo website created for learning and practicing web development. Enjoy coding!</p>
    `;
  } else if (type === "help") {
    contentArea.innerHTML = `
      <h1>Help & Support</h1>
      <p>For any issues, contact: support@example.com</p>
    `;
  }
}
