function openChat(userId) {
    // Update the URL with the user ID
    const newUrl = `?userId=${userId}`;
    window.history.pushState({ userId }, '', newUrl);

}
