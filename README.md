
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Silva Auto Elétrica e Mecânica</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Silva Auto Elétrica e Mecânica</h1>
    <p>Serviços de qualidade com confiança!</p>
  </header>

  <section id="servicos">
    <h2>Nossos Serviços</h2>
    <ul>
      <li>Auto Elétrica</li>
      <li>Mecânica Geral</li>
      <li>Injeção Eletrônica</li>
      <li>Troca de Óleo</li>
    </ul>
  </section>

  <section id="agendamento">
    <h2>Agende um Atendimento</h2>
    <form id="formAgendamento">
      <label>Nome: <input type="text" name="nome" required></label><br>
      <label>Telefone: <input type="text" name="telefone" required></label><br>
      <label>Data: <input type="date" name="data" required></label><br>
      <label>Serviço:
        <select name="servico">
          <option value="eletrica">Auto Elétrica</option>
          <option value="mecanica">Mecânica Geral</option>
          <option value="injecao">Injeção Eletrônica</option>
          <option value="troca_oleo">Troca de Óleo</option>
        </select>
      </label><br>
      <button type="submit">Enviar</button>
    </form>
  </section>

  <script src="script.js"></script>
</body>
</html>
