<h1>Produits</h1>
<table>
    <tr>
        <th>En vente</th>
    </tr>
    <?php foreach ($produits as $produit): ?>
        <tr>
            <td>
                <a> <?=$this->Html->link($produit->nom) ?> </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>