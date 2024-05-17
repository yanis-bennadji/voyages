<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte de l'Italie</title>
    <link rel="stylesheet" href="../../code/css/voyages.css" <?= time(); ?>>
    <link rel="stylesheet" href="../css/italie.css">
</head>
<body>
    <header>
            <?php
            include '../../code/page/_Header.php';
            ?>
    </header>
    
    <main>
    <div class="title-flag">
        <h1>Benvenuto in Italia!</h1>
        <img class="flagITA" src="../../assets/image/yanis/drapeau-italie.png" alt="">
    </div>
        <section id="cities" class="info-section">
            <h2>Villes</h2>
            <div class="flex-container">
                <div class="card">
                    <img src="../../assets/image/yanis/rome.avif" alt="Rome">
                    <p><strong>Rome:</strong> La capitale historique avec le Colisée et le Vatican. Rome est une ville où le passé et le présent se rejoignent. Des ruines antiques comme le Forum romain aux magnifiques œuvres d'art de la Renaissance et du Baroque, Rome est un musée à ciel ouvert. Ne manquez pas la chapelle Sixtine au Vatican, un chef-d'œuvre de Michel-Ange.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/venice.webp" alt="Venise">
                    <p><strong>Venise:</strong> La ville romantique célèbre pour ses canaux. Venise est connue pour ses gondoles, ses canaux sinueux et ses palais somptueux. Le Grand Canal offre une vue imprenable sur les édifices historiques. La place Saint-Marc et la basilique Saint-Marc sont des incontournables, tout comme le palais des Doges.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/florence.jpg" alt="Florence">
                    <p><strong>Florence:</strong> Le berceau de la Renaissance avec ses musées d'art. Florence est une ville d'art et de culture. Le musée des Offices abrite des œuvres de Botticelli et de Léonard de Vinci. La cathédrale Santa Maria del Fiore avec sa coupole majestueuse et le Ponte Vecchio, un pont médiéval toujours animé, sont des points forts de la visite.</p>
                </div>
            </div>
        </section>
        
        <section id="food" class="info-section">
            <h2>Nourriture</h2>
            <div class="flex-container">
                <div class="card">
                    <img src="../../assets/image/yanis/pizza.jpg" alt="Pizza">
                    <p><strong>Pizza:</strong> Originaire de Naples, un incontournable italien. La pizza napolitaine est réputée pour sa pâte moelleuse et ses ingrédients frais. Les pizzas traditionnelles, comme la Margherita avec de la mozzarella de bufflonne, des tomates San Marzano et du basilic frais, sont une expérience culinaire à ne pas manquer.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/pasta.webp" alt="Pâtes">
                    <p><strong>Pâtes:</strong> Variétés infinies de recettes délicieuses. Les pâtes italiennes vont des spaghetti aux lasagnes, en passant par les raviolis et les penne. Chaque région a ses spécialités, comme les pâtes à la carbonara de Rome ou les pâtes au pesto de Gênes. Les ingrédients frais et les sauces savoureuses font toute la différence.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/gelato.jpg" alt="Gelato">
                    <p><strong>Gelato:</strong> La glace italienne, douce et savoureuse. Le gelato italien est connu pour sa texture crémeuse et ses saveurs intenses. Contrairement à la crème glacée, le gelato contient moins de matières grasses et est battu plus lentement, ce qui lui donne une densité et une richesse uniques. Essayez des saveurs comme la noisette, le pistache ou le stracciatella.</p>
                </div>
            </div>
        </section>
        
        <section id="tourism" class="info-section">
            <h2>Tourisme</h2>
            <div class="flex-container">
                <div class="card">
                    <img src="../../assets/image/yanis/cinque-terre.jpg" alt="Cinque Terre">
                    <p><strong>Cinque Terre:</strong> Des villages colorés le long de la côte. Les Cinque Terre se composent de cinq villages pittoresques perchés sur des falaises surplombant la mer. Les sentiers de randonnée offrent des vues spectaculaires et chaque village a son propre charme unique. C'est un paradis pour les amoureux de la nature et de la photographie.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/amalfi_coast.jpg" alt="Côte Amalfitaine">
                    <p><strong>Côte Amalfitaine:</strong> Une magnifique région côtière à explorer. La côte Amalfitaine est célèbre pour ses paysages à couper le souffle, ses villages colorés et ses routes sinueuses. Positano, Amalfi et Ravello sont des destinations populaires, offrant des plages idylliques, des jardins luxuriants et une cuisine locale exquise.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/dolomites.jpg" alt="Dolomites">
                    <p><strong>Dolomites:</strong> Des montagnes impressionnantes pour les amateurs de nature. Les Dolomites sont une chaîne de montagnes spectaculaire dans le nord de l'Italie, idéale pour les randonnées, l'escalade et le ski. Le paysage est caractérisé par des pics rocheux, des vallées verdoyantes et des lacs alpins. En hiver, les stations de ski attirent des visiteurs du monde entier.</p>
                </div>
            </div>
        </section>
        
        <section id="monuments" class="info-section">
            <h2>Monuments</h2>
            <div class="flex-container">
                <div class="card">
                    <img src="../../assets/image/yanis/colosseum.webp" alt="Colisée">
                    <p><strong>Colisée:</strong> Un symbole de l'histoire romaine à Rome. Le Colisée est un amphithéâtre antique qui pouvait accueillir jusqu'à 50 000 spectateurs pour des combats de gladiateurs et autres spectacles. C'est l'un des monuments les plus emblématiques de Rome et une merveille d'ingénierie antique.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/leaning_tower.jpg" alt="Tour de Pise">
                    <p><strong>Tour de Pise:</strong> La célèbre tour penchée de Pise. La tour de Pise est connue pour son inclinaison unique due à un affaissement du sol. Ce clocher de la cathédrale de Pise est un site touristique populaire, et il est possible de monter à son sommet pour une vue panoramique de la ville.</p>
                </div>
                <div class="card">
                    <img src="../../assets/image/yanis/duomo_milan.jpg" alt="Duomo de Milan">
                    <p><strong>Duomo de Milan:</strong> Une cathédrale gothique magnifique à Milan. Le Duomo de Milan est l'une des plus grandes cathédrales du monde et un chef-d'œuvre de l'architecture gothique. La façade en marbre blanc est ornée de sculptures détaillées et il est possible de monter sur les toits pour une vue imprenable sur Milan.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php
        include '../page/_Footer.php';
        ?>
    </footer>
    
    
</body>
</html>
