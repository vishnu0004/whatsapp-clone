<div class="header">
                    <div class="imgText" role="button" onclick="openChatAbout()">
                        <div class="userImg">
                            <img src="images/Avatar-7.jpeg" alt="" class="cover">
                        </div>
                        <h4 title="Shayan" aria-label="Shayan">Shayan<br><span aria-label="online">online</span></h4>
                    </div>

                    <!-- Icons -->
                    <div class="chat-side">
                        <button class="icons pP" onclick="openSearch()">
                            <svg viewBox="0 0 24 24" width="24" height="24" class="">
                                <path fill="currentColor"
                                    d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z">
                                </path>
                            </svg>
                        </button>

                        <div class="dropdown-icon">
                            <button class="pressed icons pP" id="dropDown" onclick="myDrop()">
                                <svg viewBox="0 0 24 24" width="24" height="24" class="">
                                    <path fill="currentColor"
                                        d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="drop" id="drop">
                                <li class="listItem" role="button" onclick="openChatAbout()">Contact info</li>
                                <li class="listItem" role="button">Select messages</li>
                                <li class="listItem" role="button" onclick="closeRightSide()" id="closeChat">Close chat
                                </li>
                                <li class="listItem" role="button" data-bs-toggle="modal" data-bs-target="#mute-modal">
                                    Mute notifications</li>
                                <li class="listItem" role="button">Disappearing messages</li>
                                <li class="listItem" role="button" data-bs-toggle="modal" data-bs-target="#clear-modal">
                                    Clear messages</li>
                                <li class="listItem" role="button" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal">Delete chat</li>
                            </ul>
                        </div>
                    </div>
                </div>