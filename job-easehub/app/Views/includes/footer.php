    <style>
        .site-footer {
            background: #1e293b;
            color: #f8fafc;
            padding: 4rem 1.5rem 2rem;
            margin-top: 5rem;
        }
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }
        .footer-section h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #fff;
        }
        .footer-section p, .footer-section li {
            font-size: 0.875rem;
            color: #94a3b8;
            margin-bottom: 0.75rem;
            line-height: 1.6;
        }
        .footer-section a {
            color: #94a3b8;
            text-decoration: none;
            transition: 0.2s;
        }
        .footer-section a:hover {
            color: var(--primary);
        }
        .footer-bottom {
            max-width: 1200px;
            margin: 3rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid #334155;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .copyright {
            font-size: 0.8125rem;
            color: #64748b;
        }
        .footer-social {
            display: flex;
            gap: 1.5rem;
        }
        .footer-social a {
            font-size: 1.25rem;
            color: #64748b;
        }
        .footer-social a:hover { color: #fff; }

        @media (max-width: 768px) {
            .footer-container { grid-template-columns: 1fr; gap: 2rem; }
            .footer-bottom { flex-direction: column; text-align: center; }
        }
    </style>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>JobHub</h3>
                <p>문딜로지스틱스 (MoonDilogistics)<br>IT 웹 서비스 운영 및 커리어 플랫폼</p>
                <p>사업자 등록번호 : 345-18-02361</p>
            </div>
            
            <div class="footer-section">
                <h3>고객지원</h3>
                <p><i class="fa-regular fa-envelope"></i> <a href="mailto:gjqmaoslwj@naver.com">gjqmaoslwj@naver.com</a></p>
                <p><i class="fa-regular fa-clock"></i> 평일 09:00 ~ 18:00<br>(점심시간 11:00 ~ 13:00)</p>
                <p>정보 수정 및 삭제 요청은 이메일로 문의주세요.</p>
            </div>
            
            <div class="footer-section">
                <h3>패밀리 서비스</h3>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="https://pongpong.easehub.co.kr" target="_blank">🔍 퐁퐁코리아 - 생활정보</a></li>
                    <li><a href="https://car.easehub.co.kr" target="_blank">💼 편잇 - 차량 할인정보</a></li>
                    <li><a href="https://health.easehub.co.kr" target="_blank">🏥 헬스허브 - 의료 서비스</a></li>
                    <li><a href="https://animal.easehub.co.kr" target="_blank">🐾 애니멀케어 - 반려동물</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                &copy; <?= date('Y') ?> MoonDilogistics. All rights reserved.
            </div>
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </footer>

    <!-- Naver Analytics -->
    <script type="text/javascript" src="//wcs.pstatic.net/wcslog.js"></script>
    <script type="text/javascript">
    if(!wcs_add) var wcs_add = {};
    wcs_add["wa"] = "9b158284b08188";
    if(window.wcs) {
      wcs_do();
    }
    </script>
</body>
</html>
