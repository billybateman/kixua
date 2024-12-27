<div class="container py-5">
    <h2 class="mb-4">AI-Assisted Code/Snippets Editor</h2>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Code Editor
        </div>
        <div class="card-body">
            <div id="codeEditor" class="form-control" style="height: 300px;"></div>
            <div class="mt-3 text-end">
                <button class="btn btn-success" id="runCode">Run Code</button>
                <button class="btn btn-secondary" id="suggestSnippets">Get Suggestions</button>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h4>Output</h4>
        <div id="output" class="border p-3 bg-light">No output yet.</div>
    </div>

    <div class="mt-4">
        <h4>Suggested Snippets</h4>
        <ul id="suggestedSnippets" class="list-group">
            <li class="list-group-item">No suggestions yet.</li>
        </ul>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.33.0/min/vs/loader.js"></script>
<script>
    // Load Monaco Editor
    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.33.0/min/vs' } });
    require(['vs/editor/editor.main'], function() {
        window.editor = monaco.editor.create(document.getElementById('codeEditor'), {
            value: '// Write your code here...\n',
            language: 'javascript',
            theme: 'vs-dark'
        });
    });

    document.getElementById('runCode').addEventListener('click', function () {
        const code = window.editor.getValue();
        try {
            const result = eval(code); // WARNING: Only for demonstration; eval is dangerous in production.
            document.getElementById('output').textContent = `Output:\n${result}`;
        } catch (error) {
            document.getElementById('output').textContent = `Error:\n${error.message}`;
        }
    });

    document.getElementById('suggestSnippets').addEventListener('click', async function () {
        const snippetList = document.getElementById('suggestedSnippets');
        snippetList.innerHTML = '<li class="list-group-item">Loading suggestions...</li>';

        try {
            const response = await fetch('https://api.openai.com/v1/completions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_API_KEY' // Replace with your OpenAI API key
                },
                body: JSON.stringify({
                    model: 'text-davinci-003',
                    prompt: 'Provide 3 JavaScript code snippets.',
                    max_tokens: 150
                })
            });

            const data = await response.json();
            const snippets = data.choices[0].text.split('\n').filter(Boolean);

            snippetList.innerHTML = '';
            snippets.forEach(snippet => {
                const li = document.createElement('li');
                li.textContent = snippet;
                li.className = 'list-group-item';
                snippetList.appendChild(li);
            });
        } catch (error) {
            snippetList.innerHTML = '<li class="list-group-item text-danger">Failed to fetch suggestions.</li>';
        }
    });
</script>