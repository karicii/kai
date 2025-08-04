<?php require_once './core/config.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI Uygulama Paneli</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-background: #0A0A0A;
            --color-surface: #111111;
            --color-surface-light: #181818;
            --color-border: rgba(255, 255, 255, 0.1);
            --color-text-primary: #EAEAEA;
            --color-text-secondary: #A3A3A3;
            --color-accent: #3B82F6;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-primary);
        }
        
        .font-logo {
            font-family: 'Lexend', sans-serif;
        }
        
        .kanban-column {
            background-color: var(--color-surface);
        }

        .kanban-card {
            background-color: var(--color-surface-light);
            border: 1px solid var(--color-border);
            transition: box-shadow 0.2s, transform 0.2s, border-color 0.2s;
            cursor: grab;
        }
        .kanban-card:hover {
            transform: translateY(-2px);
            border-color: rgba(255, 255, 255, 0.2);
        }
        .kanban-card.active {
             border-color: var(--color-accent);
             box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
        }
        .kanban-card.sortable-ghost {
            background: rgba(59, 130, 246, 0.1);
            border: 1px dashed var(--color-accent);
        }
        
        #app-pomo-footer {
            background: linear-gradient(to top, var(--color-surface-light), var(--color-surface));
            border-top: 1px solid var(--color-border);
            position: relative;
        }
        #app-pomo-footer::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 0; 
            background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y), rgba(59, 130, 246, 0.1), transparent 40%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }
        #app-pomo-footer:hover::before {
            opacity: 1;
        }

        .progress-bar-bg {
            background-color: var(--color-surface);
        }
        .progress-bar-fg {
            background-color: var(--color-text-primary);
            transition: width 0.5s ease-out;
        }

        .modal-backdrop {
            background-color: rgba(0,0,0,0.7);
            backdrop-filter: blur(8px);
        }

        .modal-input {
            background-color: var(--color-surface);
            border: 1px solid var(--color-border);
            color: var(--color-text-primary);
        }

        .filter-dropdown {
            transition: opacity 0.2s, transform 0.2s;
        }
    </style>
</head>
<body class="h-screen w-screen flex flex-col">

    <div class="flex flex-1 overflow-hidden">
        <aside class="w-64 flex-shrink-0 p-6 hidden md:flex flex-col" style="background-color: var(--color-surface);">
            <a href="<?php echo BASE_URL; ?>/" class="font-logo text-3xl font-bold tracking-tighter mb-12">KAI</a>
            <nav class="flex-grow">
                <h3 class="text-xs font-bold uppercase tracking-widest mb-4" style="color: var(--color-text-secondary);">PROJELER</h3>
                <ul id="project-list" class="space-y-2">
                    <li><a href="#" class="project-link block p-2 rounded-md font-semibold" style="background-color: var(--color-surface-light);">🚀 Lansman Planı</a></li>
                    <li><a href="#" class="project-link block p-2 rounded-md font-medium hover:bg-gray-800" style="color: var(--color-text-secondary);">🎨 Yeniden Tasarım</a></li>
                </ul>
            </nav>
            <div>
                <a href="#" class="block p-2 rounded-md font-medium hover:bg-gray-800" style="color: var(--color-text-secondary);">Ayarlar</a>
                <a href="#" class="block p-2 rounded-md font-medium hover:bg-gray-800" style="color: var(--color-text-secondary);">Profil</a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            <main class="flex-1 flex flex-col p-6 overflow-hidden">
                <div class="flex-shrink-0 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h1 id="project-title" class="text-2xl font-bold">Lansman Planı</h1>
                            <p id="task-counter" class="text-sm" style="color: var(--color-text-secondary);"></p>
                        </div>
                        <div class="flex items-center gap-4">
                             <div class="relative">
                                <button id="filter-button" class="p-2 rounded-md hover:bg-gray-800 flex items-center gap-2 text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L12 14.414V19a1 1 0 01-1.447.894l-4-2A1 1 0 016 17V14.414L3.293 6.707A1 1 0 013 6V4z"></path></svg>
                                    Filtrele
                                </button>
                                <div id="filter-dropdown" class="filter-dropdown absolute right-0 mt-2 w-64 p-4 rounded-xl shadow-lg opacity-0 transform scale-95 pointer-events-none" style="background-color: var(--color-surface-light); border: 1px solid var(--color-border);">
                                    <input id="filter-input" type="text" placeholder="Görevlerde ara..." class="w-full p-2 rounded-md modal-input">
                                </div>
                             </div>
                            <button id="add-task-button" class="px-4 py-2 text-sm font-semibold rounded-md" style="background-color: var(--color-accent); color: var(--color-text-primary);">Yeni Görev</button>
                        </div>
                    </div>
                    <div class="w-full h-2 rounded-full progress-bar-bg">
                        <div id="project-progress" class="h-2 rounded-full progress-bar-fg"></div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 flex-grow overflow-hidden">
                    <div class="kanban-column rounded-xl p-4 flex flex-col">
                        <h2 class="font-semibold mb-4 px-2">Yapılacaklar</h2>
                        <div id="todo-list" class="task-list flex-grow space-y-3 overflow-y-auto p-1">
                            <div class="kanban-card p-4 rounded-lg">Landing Page Tasarımı</div>
                            <div class="kanban-card p-4 rounded-lg">API Entegrasyonu</div>
                            <div class="kanban-card p-4 rounded-lg">Veritabanı Şeması</div>
                        </div>
                    </div>
                    <div class="kanban-column rounded-xl p-4 flex flex-col">
                        <h2 class="font-semibold mb-4 px-2">Yapılıyor</h2>
                        <div id="inprogress-list" class="task-list flex-grow space-y-3 overflow-y-auto p-1">
                            <div class="kanban-card p-4 rounded-lg">Auth Modülerleştirme</div>
                        </div>
                    </div>
                    <div class="kanban-column rounded-xl p-4 flex flex-col">
                        <h2 class="font-semibold mb-4 px-2">Bitti</h2>
                        <div id="done-list" class="task-list flex-grow space-y-3 overflow-y-auto p-1">
                            <div class="kanban-card p-4 rounded-lg opacity-60">Proje Kurulumu</div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer id="app-pomo-footer" class="flex-shrink-0 w-full p-4 flex items-center justify-between">
        <div class="flex items-center gap-4 w-1/3">
            <div id="pomo-icon" class="w-12 h-12 rounded-md flex items-center justify-center text-2xl" style="background-color: var(--color-surface);">⏱️</div>
            <div>
                <p id="pomo-status" class="font-semibold">Odak Oturumu</p>
                <p id="pomo-current-task" class="text-sm" style="color: var(--color-text-secondary);">Başlamak için bir görev seçin</p>
            </div>
        </div>
        <div class="flex flex-col items-center w-1/3">
            <div class="flex items-center gap-4">
                 <button id="pomo-reset" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h5M20 20v-5h-5"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9a9 9 0 0114.65-5.356L20 5M20 15a9 9 0 01-14.65 5.356L4 19"></path></svg>
                </button>
                <button id="pomo-start-pause" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path></svg>
                </button>
                <span id="pomo-time" class="text-lg font-mono w-20 text-center">25:00</span>
            </div>
            <div class="w-full h-1 rounded-full progress-bar-bg mt-2">
                <div id="pomo-progress" class="h-1 rounded-full progress-bar-fg" style="width: 0%;"></div>
            </div>
        </div>
        <div class="w-1/3"></div>
    </footer>

    <div id="add-task-modal" class="fixed inset-0 z-50 items-center justify-center hidden">
        <div id="modal-backdrop" class="modal-backdrop absolute inset-0"></div>
        <div class="relative w-full max-w-lg p-8 rounded-xl" style="background-color: var(--color-surface);">
            <h2 class="text-2xl font-bold mb-4">Yeni Görev Ekle</h2>
            <form id="add-task-form">
                <div class="space-y-4">
                    <div>
                        <label for="task-title" class="text-sm font-medium">Görev Başlığı</label>
                        <input id="task-title" type="text" required class="w-full p-2 mt-1 rounded-md modal-input">
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-6">
                    <button type="button" id="cancel-task-button" class="px-4 py-2 text-sm rounded-md" style="background-color: var(--color-surface-light);">İptal</button>
                    <button type="submit" class="px-4 py-2 text-sm font-semibold rounded-md" style="background-color: var(--color-accent);">Görevi Ekle</button>
                </div>
            </form>
            <button id="close-task-modal" class="absolute top-4 right-4 p-2 rounded-full hover:bg-gray-700">&times;</button>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="https://unpkg.com/tone"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const lists = document.querySelectorAll('.task-list');
            lists.forEach(list => {
                new Sortable(list, {
                    group: 'shared',
                    animation: 150,
                    ghostClass: 'sortable-ghost',
                    onEnd: () => updateProjectProgress()
                });
            });

            const addTaskButton = document.getElementById('add-task-button');
            const addTaskModal = document.getElementById('add-task-modal');
            const closeModalButton = document.getElementById('close-task-modal');
            const cancelTaskButton = document.getElementById('cancel-task-button');
            const addTaskForm = document.getElementById('add-task-form');
            const todoList = document.getElementById('todo-list');
            const modalBackdrop = document.getElementById('modal-backdrop');

            const openModal = () => addTaskModal.classList.replace('hidden', 'flex');
            const closeModal = () => addTaskModal.classList.replace('flex', 'hidden');

            addTaskButton.addEventListener('click', openModal);
            closeModalButton.addEventListener('click', closeModal);
            cancelTaskButton.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);

            addTaskForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const title = document.getElementById('task-title').value;
                if (!title) return;

                const newCard = document.createElement('div');
                newCard.className = 'kanban-card p-4 rounded-lg';
                newCard.textContent = title;
                todoList.appendChild(newCard);
                updateProjectProgress();
                addTaskForm.reset();
                closeModal();
            });

            const timeDisplay = document.getElementById('pomo-time');
            const progressBar = document.getElementById('pomo-progress');
            const startPauseBtn = document.getElementById('pomo-start-pause');
            const resetBtn = document.getElementById('pomo-reset');
            const currentTaskDisplay = document.getElementById('pomo-current-task');
            const pomoStatus = document.getElementById('pomo-status');
            const pomoIcon = document.getElementById('pomo-icon');
            
            const WORK_TIME = 25 * 60;
            const BREAK_TIME = 5 * 60;
            let timer;
            let totalTime = WORK_TIME;
            let timeLeft = WORK_TIME;
            let isRunning = false;
            let isBreak = false;
            let currentTaskElement = null;

            const synth = new Tone.Synth().toDestination();

            function updateDisplay() {
                const minutes = Math.floor(timeLeft / 60).toString().padStart(2, '0');
                const seconds = (timeLeft % 60).toString().padStart(2, '0');
                timeDisplay.textContent = `${minutes}:${seconds}`;
                const progressPercent = ((totalTime - timeLeft) / totalTime) * 100;
                progressBar.style.width = `${progressPercent}%`;
            }

            function startTimer() {
                if (!currentTaskElement && !isBreak) { return; }
                isRunning = true;
                startPauseBtn.innerHTML = '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>';
                timer = setInterval(() => {
                    timeLeft--;
                    updateDisplay();
                    if (timeLeft <= 0) {
                        clearInterval(timer);
                        synth.triggerAttackRelease(isBreak ? "G4" : "C4", "8n");
                        toggleBreak();
                    }
                }, 1000);
            }

            function pauseTimer() {
                isRunning = false;
                startPauseBtn.innerHTML = '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path></svg>';
                clearInterval(timer);
            }

            function resetTimer() {
                pauseTimer();
                isBreak = false;
                timeLeft = WORK_TIME;
                totalTime = WORK_TIME;
                pomoStatus.textContent = "Odak Oturumu";
                pomoIcon.textContent = "⏱️";
                if(currentTaskElement) currentTaskDisplay.textContent = currentTaskElement.textContent;
                else currentTaskDisplay.textContent = "Başlamak için bir görev seçin";
                updateDisplay();
            }

            function toggleBreak(){
                pauseTimer();
                isBreak = !isBreak;
                if(isBreak){
                    timeLeft = BREAK_TIME;
                    totalTime = BREAK_TIME;
                    pomoStatus.textContent = "Mola Zamanı";
                    currentTaskDisplay.textContent = "Kısa bir ara verin.";
                    pomoIcon.textContent = "☕";
                } else {
                    timeLeft = WORK_TIME;
                    totalTime = WORK_TIME;
                    pomoStatus.textContent = "Odak Oturumu";
                    pomoIcon.textContent = "⏱️";
                    if(currentTaskElement) currentTaskDisplay.textContent = currentTaskElement.textContent;
                }
                updateDisplay();
                startTimer();
            }
            
            startPauseBtn.addEventListener('click', () => { isRunning ? pauseTimer() : startTimer(); });
            resetBtn.addEventListener('click', resetTimer);

            document.querySelector('.flex-1.flex.flex-col.min-w-0').addEventListener('click', (e) => {
                const card = e.target.closest('.kanban-card');
                if (card) {
                    if (currentTaskElement) {
                        currentTaskElement.classList.remove('active');
                    }
                    currentTaskElement = card;
                    currentTaskElement.classList.add('active');
                    resetTimer();
                }
            });

            const footerPomo = document.getElementById('app-pomo-footer');
            footerPomo.addEventListener('mousemove', e => {
                const rect = footerPomo.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                footerPomo.style.setProperty('--mouse-x', `${x}px`);
                footerPomo.style.setProperty('--mouse-y', `${y}px`);
            });

            const filterButton = document.getElementById('filter-button');
            const filterDropdown = document.getElementById('filter-dropdown');
            const filterInput = document.getElementById('filter-input');

            filterButton.addEventListener('click', (e) => {
                e.stopPropagation();
                const isHidden = filterDropdown.classList.contains('opacity-0');
                if (isHidden) {
                    filterDropdown.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                } else {
                    filterDropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                }
            });

            filterInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                document.querySelectorAll('.kanban-card').forEach(card => {
                    const cardText = card.textContent.toLowerCase();
                    if (cardText.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });

            const projectLinks = document.querySelectorAll('.project-link');
            projectLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    projectLinks.forEach(l => {
                        l.style.backgroundColor = '';
                        l.style.color = 'var(--color-text-secondary)';
                    });
                    link.style.backgroundColor = 'var(--color-surface-light)';
                    link.style.color = 'var(--color-text-primary)';
                    document.getElementById('project-title').textContent = link.textContent;
                });
            });

            function updateProjectProgress() {
                const allTasks = document.querySelectorAll('.kanban-card');
                const doneTasks = document.getElementById('done-list').querySelectorAll('.kanban-card');
                const total = allTasks.length;
                const done = doneTasks.length;
                
                const progress = total > 0 ? (done / total) * 100 : 0;
                document.getElementById('project-progress').style.width = `${progress}%`;
                document.getElementById('task-counter').textContent = `${total} görevden ${done} tanesi tamamlandı.`;
            }

            updateDisplay();
            updateProjectProgress();
        });
    </script>
</body>
</html>
