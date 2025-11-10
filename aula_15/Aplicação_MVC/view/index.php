<?php
// Importa o arquivo do controller que contém a lógica de controle
require_once __DIR__ . '/../controller/bebidaController.php';

// Usa o namespace correto do controller
use Controller\BebidaController;

// Cria uma instância do controller para manipular as bebidas
$controller = new BebidaController();

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Se a ação for "criar", chama o método de criação no controller
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } 
    
    elseif ($_POST['acao'] === 'editar') {
        $controller->editar($_POST['nomeAntigo'], $_POST['nomeNovo'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    }

    // Se a ação for "deletar", chama o método de exclusão no controller
    elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

// Obtém a lista atualizada de bebidas do controller
$lista = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Bebidas</title>
    <!-- Importa Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --light-color: #ecf0f1;
            --dark-color: #34495e;
            --text-color: #2c3e50;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--text-color);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: var(--primary-color);
            color: white;
            padding: 20px 0;
            text-align: center;
            border-radius: var(--border-radius);
            margin-bottom: 30px;
            box-shadow: var(--box-shadow);
        }

        header h1 {
            font-size: 2.2rem;
            font-weight: 600;
        }

        .card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-color);
            font-weight: 600;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
        }

        input, select, button {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        button {
            background: var(--secondary-color);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        button:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--success-color);
            grid-column: 1 / -1;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background: #219653;
        }

        .btn-danger {
            background: var(--accent-color);
            padding: 8px 12px;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .btn-warning {
            background: var(--warning-color);
            padding: 8px 12px;
        }

        .btn-warning:hover {
            background: #e67e22;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        th {
            background: var(--primary-color);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .acoes {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .acoes button {
            padding: 8px 12px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .editar-form {
            display: none;
            margin-top: 15px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: var(--border-radius);
            border-left: 4px solid var(--secondary-color);
        }

        .editar-form .form-grid {
            margin-bottom: 0;
        }

        .btn-cancel {
            background: #95a5a6;
        }

        .btn-cancel:hover {
            background: #7f8c8d;
        }

        .empty-state {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #bdc3c7;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            .acoes {
                flex-direction: column;
                align-items: center;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-refrigerante { background: #e1f5fe; color: #01579b; }
        .badge-cerveja { background: #f3e5f5; color: #4a148c; }
        .badge-vinho { background: #fbe9e7; color: #bf360c; }
        .badge-destilado { background: #fff3e0; color: #e65100; }
        .badge-agua { background: #e0f2f1; color: #004d40; }
        .badge-suco { background: #f1f8e9; color: #33691e; }
        .badge-energetico { background: #fff8e1; color: #ff6f00; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>🍾 Sistema de Gerenciamento de Bebidas</h1>
    </header>

    <main>
        <section class="card">
            <h2>Cadastrar nova bebida</h2>
            <form method="POST">
                <input type="hidden" name="acao" value="criar">
                <div class="form-grid">
                    <input type="text" name="nome" placeholder="Nome da bebida" required>
                    <select name="categoria" required>
                        <option value="">Selecione a categoria</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Cerveja">Cerveja</option>
                        <option value="Vinho">Vinho</option>
                        <option value="Destilado">Destilado</option>
                        <option value="Água">Água</option>
                        <option value="Suco">Suco</option>
                        <option value="Energético">Energético</option>
                    </select>
                    <input type="text" name="volume" placeholder="Volume (ex: 350ml)" required>
                    <input type="number" step="0.01" name="valor" placeholder="Valor (R$)" required>
                    <input type="number" name="qtde" placeholder="Quantidade" required>
                </div>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-plus-circle"></i> Cadastrar Bebida
                </button>
            </form>
        </section>

        <section class="card">
            <h2>Bebidas cadastradas</h2>
            
            <?php if (empty($lista)): ?>
                <div class="empty-state">
                    <i class="fas fa-wine-bottle"></i>
                    <h3>Nenhuma bebida cadastrada</h3>
                    <p>Comece adicionando sua primeira bebida ao sistema.</p>
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Volume</th>
                            <th>Valor (R$)</th>
                            <th>Quantidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $index => $bebida): ?>
                            <tr>
                                <td><strong><?= htmlspecialchars($bebida->getNome()) ?></strong></td>
                                <td>
                                    <span class="badge badge-<?= strtolower($bebida->getCategoria()) ?>">
                                        <?= htmlspecialchars($bebida->getCategoria()) ?>
                                    </span>
                                </td>
                                <td><?= htmlspecialchars($bebida->getVolume()) ?></td>
                                <td>R$ <?= number_format($bebida->getValor(), 2, ',', '.') ?></td>
                                <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
                                <td class="acoes">
                                    <button type="button" class="btn-warning" onclick="toggleEditForm('<?= $index ?>')" title="Editar">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    
                                    <form method="POST" onsubmit="return confirm('Tem certeza que deseja excluir <?= htmlspecialchars($bebida->getNome()) ?>?');" style="display:inline;">
                                        <input type="hidden" name="acao" value="deletar">
                                        <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                                        <button type="submit" class="btn-danger" title="Excluir">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            
                            <!-- Formulário de edição -->
                            <tr id="editar-form-<?= $index ?>" class="editar-form">
                                <td colspan="6">
                                    <h3 style="margin-bottom: 15px;">Editando: <?= htmlspecialchars($bebida->getNome()) ?></h3>
                                    <form method="POST">
                                        <input type="hidden" name="acao" value="editar">
                                        <input type="hidden" name="nomeAntigo" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                                        <div class="form-grid">
                                            <input type="text" name="nomeNovo" value="<?= htmlspecialchars($bebida->getNome()) ?>" placeholder="Nome da bebida" required>
                                            <input type="text" name="categoria" value="<?= htmlspecialchars($bebida->getCategoria()) ?>" placeholder="Categoria" required>
                                            <input type="text" name="volume" value="<?= htmlspecialchars($bebida->getVolume()) ?>" placeholder="Volume" required>
                                            <input type="number" step="0.01" name="valor" value="<?= htmlspecialchars($bebida->getValor()) ?>" placeholder="Valor (R$)" required>
                                            <input type="number" name="qtde" value="<?= htmlspecialchars($bebida->getQtde()) ?>" placeholder="Quantidade" required>
                                        </div>
                                        <div style="display: flex; gap: 10px; margin-top: 15px;">
                                            <button type="submit" class="btn-primary">
                                                <i class="fas fa-save"></i> Salvar Alterações
                                            </button>
                                            <button type="button" class="btn-cancel" onclick="toggleEditForm('<?= $index ?>')">
                                                <i class="fas fa-times"></i> Cancelar
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>
</div>

<script>
function toggleEditForm(index) {
    const form = document.getElementById('editar-form-' + index);
    if (form) {
        const isHidden = window.getComputedStyle(form).display === 'none';
        form.style.display = isHidden ? 'table-row' : 'none';
        
        // Rolagem suave para o formulário de edição
        if (isHidden) {
            form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }
}

// Fechar formulários de edição ao clicar fora (opcional)
document.addEventListener('click', function(e) {
    if (!e.target.closest('.editar-form') && !e.target.closest('.btn-warning')) {
        const openForms = document.querySelectorAll('.editar-form[style*="display: table-row"]');
        openForms.forEach(form => {
            form.style.display = 'none';
        });
    }
});
</script>

</body>
</html>